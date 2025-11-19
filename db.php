<?php
$host = "localhost";
$puerto = 3307;
$user = "root";
$pass = "";
$db = "mi_sitio";

$conn = new mysqli($host, $user, $pass, $db, $puerto);
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}
?>