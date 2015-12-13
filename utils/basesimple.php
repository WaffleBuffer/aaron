<?php

	try
	{
		$dns = 'mysql:host=mysql-tixp.alwaysdata.net;dbname=tixp_name';
		$pdo = new PDO($dns, 'tixp_simple', 'aaronVipPass');
		$pdo->exec('SET CHARACTER SET utf8');
		$pdo->setAttribute()PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch (PDOException $e)
	{
		die('Erreur : '.e->getMessage());
	}