<?php
	$db_username = "root";
	$db_password="";
	$db_name = "bases_pscpd";
	$db_host = "localhost";
	$db = mysqli_connect($db_host, $db_username, $db_password, $db_name)
		or die('impossible de connecter la base de donnees');