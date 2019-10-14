<?php

require 'user.php';

$rain = file_get_contents("https://climateapi.000webhostapp.com?lat=" . $_GET['lat'] . "&long=" . $_GET['long']);

$dbh = new PDO('mysql:host=localhost;dbname=farm', 'root');
if (!is_null($rain))
{
	$stmt = $dbh->prepare("UPDATE users SET rain = :rain WHERE id = :id");
	$stmt->execute(array(':rain' => $rain, ':id' => $_SESSION['id']));

	$stmt = $dbh->prepare("UPDATE users SET lat = :lat WHERE id = :id");
	$stmt->execute(array(':lat' => $_GET['lat'], ':id' => $_SESSION['id']));

	$stmt = $dbh->prepare("UPDATE users SET lon = :lon WHERE id = :id");
	$stmt->execute(array(':lon' => $_GET['lon'], ':id' => $_SESSION['id']));
}

$stmt = $dbh->prepare("UPDATE users SET size = :size WHERE id = :id");
$stmt->execute(array(':size' => $_GET['size'], ':id' => $_SESSION['id']));

header('Location: /info.php');

?>