<?php

# Script alerte intranet (check alerte pour chaque site)

if (isset($_GET['site'])) {
	$site = $_GET['site'];
}

$name = $site;
$name .= '.txt';

$manip = fopen($name, "r+");

$alerte = fread($manip, filesize($name));

if($alerte!=''){
	print($alerte)
}

?>