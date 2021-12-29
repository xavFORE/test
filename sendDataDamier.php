<?php
$nbrClic = $_POST['nbrClic'];

$mysqli = new mysqli("localhost", "mehdi", "password", "damier");

$res = $mysqli->query("INSERT INTO essais (nbrClic) VALUES ($nbrClic);");

$res->close();
?>