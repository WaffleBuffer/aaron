<?php
function head ($title, $desc, $keywords, $css, $scripts)
{
    echo
        '<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8"/>
		<meta name="author" content="Remi Segretain, Kurt Savio, Julien Teulle, Thomas Medard, Lucie Pellottiero"/>
		<meta name="description" content="' . $desc . '"/>
		<meta name="keywords" content="' . $keywords . '"/>
		<title>' . $title . '</title>
		<link rel="icon" href="static/images/favicon.png"/>
		<link rel="stylesheet" href="';
		
        echo 'static/css/' . ((!($css)) ? 'style.css' : $css ) .'"/>';
    echo "\n";
    for ($i = 0; $i < count($scripts); $i++)
    {
        echo
            '		<script src="' . $scripts[$i] . '"></script>' . "\n";
    }
    echo
    '	</head>
	<body>';
}

function foot ()
{
    echo "\n"
        . '        <footer>'
        . 'Pied'
        . '</footer>
    </body>
</html>';
}
