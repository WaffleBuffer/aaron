<?php
/**
 * Created by PhpStorm.
 * User: Thomas MEDARD
 * Date: 11/12/15
 * Time: 16:12
 */
require_once 'utils/startend.php';
require_once 'objetphp/rssFeed.php';

$scripts = array();
head('Test', 'salut les coco', 'projet, test, php, yolol', '', $scripts);

echo '<h1 id="titre">Test RSS</h1>';
echo 'Tete <br/>' . "\n";
echo "Salut";
$flux = new RssFeed('http://www.lemonde.fr/m-actu/rss_full.xml');
echo "look\n";
$rssPosts = $flux->getRssPosts();
foreach($rssPosts as $valeur)
{
    echo $valeur . "<br/><br/>\n";
}
echo '        <a id="ancrage" href="#"><img src="static/images/ancrage.png"  width="200" height="200" alt="retour en haut"/></a>';
foot();
