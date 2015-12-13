<?php
session_start();
require_once 'utils/startend.php';
$script = array ();
head('Inscription', 'Page d\'inscription', 'inscription, utilisateur, mail, mot de passe', '', $script);

if ($_GET['Error'] == 'Identifiant')
{
    echo 'L\'identifiant est déjà utilisé' . '<br/><br/>';
}
if ($_GET['Error'] == 'CondGen')
{
    echo 'Vous n\'avez pas accepté les conditions générales d\'utilisation' . '<br/><br/>';
}
if ($_GET['Error'] == 'PassDiff')
{
    echo 'Le mot de passe et la confimation du mot de passe ne sont pas identique' . '<br/><br/>';
}
if ($_GET['Error'] == 'PassVide')
{
    echo 'Le mot de passe ne peut être vide' . '<br/><br/>';
}
if ($_GET['Error'] == 'IdentVide')
{
    echo 'L\'identifiant ne peut être vide' . '<br/><br/>';
}
if ($_GET['Error'] == 'MailVide')
{
    echo 'L\'e-mail ne peut être vide' . '<br/><br/>';
}
if ($_GET['Error'] == 'PassCourt')
{
    echo 'Le mot de passe doit faire au moins 6 caractères' . '<br/><br/>';
}
if ($_GET['Error'] == 'button')
{
    echo 'Boutton non géré' . '<br/><br/>';
}

?>
    <form id="formulaire" action="utils/data-processing.php" method="post">

        <label for="identifiant">Identifiant
        <input type="text" name="identifiant" value=""/></label><br/>

        <label for="e-mail">E-mail
        <input type="text" name="e-mail" value=""/></label><br/>

        <label for="mdp">Mot de passe
        <input type="password" name="mdp" value=""/></label><br/>

        <label for="vmdp">Vérification mot de passe
        <input type="password" name="vmdp" value=""/></label><br/>

        <label for="cg">Condition Générales
        <input type="checkbox" name="cg" value="NULL"/></label><br/>

        <label for="bds">Bouton de soumission
        <input type="submit" name="action" value="Submit"/></label><br/>

    </form>
<?php
foot();

