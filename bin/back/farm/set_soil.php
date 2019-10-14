<?php

require 'user.php';

$dbh = new PDO('mysql:host=localhost;dbname=farm', 'root');
$stmt = $dbh->prepare("UPDATE users SET soil = :soil WHERE id = :id");
$stmt->execute(array(':soil' => $_GET['soil'], ':id' => $_SESSION['id']));

?>