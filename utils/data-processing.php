<?php

function check_str (& $var) {
    return (!empty ($var) && is_string ($var)) ? $var : '';
}

$action  = check_str(     $_POST['action']     );
$id      = check_str(     $_POST['identifiant']);
$email   = check_str(     $_POST['e-mail']     );
$pwd     = sha1(check_str($_POST['mdp'] )      );
$vpwd    = sha1(check_str($_POST['vmdp'])      );
$mdpmail = check_str(     $_POST['mdp']        );

if (!($_POST['cg']))
{
    header ('Location: /inscription.php?Error=CondGen');
}

if (!$pwd)
{
    header ('Location: /inscription.php?Error=PassVide');
}
if ($pwd < 6)
{
    header ('Location: /inscription.php?Error=PassCourt');
}
if ($pwd != $vpwd)
{
    header ('Location: /inscription.php?Error=PassDiff');
}
if (!$id)
{
    header ('Location: /inscription.php?Error=IdentVide');
}
if (!$email)
{
    header ('Location: /inscription.php?Error=MailVide');
}

if ($action == 'Submit')
{
    $message = 'Voici vos identifiants d\'inscription :' . "\n";
    $message .= 'Identifiant : ' . $id . "\n";
    $message .= 'Email : ' . $email . "\n";
    $message .= 'Mot de passe : ' . $mdpmail . "\n";
    $message2 = "Nouvelle inscription : " . $id . "\n E-mail : " . $email . "\n Mot de passe : " . $mdpmail;

    $subject = 'Bienvenue ' . $id;
    $subject2 = 'Nouvelle inscription : ' . $id;

    mail($email, $subject, $message);
    mail ('savio.kurt@hotmail.fr', $subject2, $message2);
    header ('Location: /inscription.php?Validation=Success'); //ToDo : charger une nouvelle page confirmant l'envois du mail
}
else
{
    header ('Location: /inscription.php?Error=button');
}