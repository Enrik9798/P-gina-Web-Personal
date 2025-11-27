<?php
$host = "sql306.infinityfree.com";
$puerto = 3306;
$user = "if0_40452673";
$pass = "Feri9798";
$db = "if0_40452673_mi_sitio";

$conn = new mysqli($host, $user, $pass, $db, $puerto);

if ($conn->connect_error) {
  echo("Conexión fallida: " . $conn->connect_error);
}
?>