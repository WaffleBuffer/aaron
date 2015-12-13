<?php
    require_once 'utils/startend.php';
	$scripts = array("script1.js", "script2.js");
    head('Test', 'salut les coco', 'projet, test, php, yolol', '', $scripts);
	echo '<h1 id="titre">Aaron</h1>';
	echo 'Tete <br/>';
	echo '<a href="inscription.php">inscription</a>';
	if($flux = simplexml_load_file('http://www.lemonde.fr/m-actu/rss_full.xml'))
	{
   		$donnee = $flux->channel;
   		foreach($donnee->item as $valeur)
   		{
			  echo '<p>' . date("d/m/Y",strtotime($valeur->pubDate)) . ' - <a href="' . $valeur->link . '">' . $valeur->title . '</a>';
			  echo '<br/>' . $valeur->description . '</p>';
   		}
	}else echo 'Erreur de lecture du flux RSS';
	echo '		<a id="ancrage" href="#"><img src="static/images/ancrage.png"  width="200" height="200" alt="retour en haut"/></a>';
	?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript">
$(window).scroll(function() {
if ($(this).scrollTop()) {
    $('#toTop:hidden').stop(true, true).fadeIn();
} else {
    $('#toTop').stop(true, true).fadeOut();
}
});
</script>';
<?php
	foot();
