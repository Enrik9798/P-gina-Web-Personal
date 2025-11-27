<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = htmlspecialchars($_POST['nombre']);
  $correo = filter_var($_POST['correo'], FILTER_SANITIZE_EMAIL);
  $mensaje = htmlspecialchars($_POST['mensaje']);

  $sql = "INSERT INTO mensajes (nombre, correo, mensaje) VALUES (?, ?, ?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("sss", $nombre, $correo, $mensaje);

  if ($stmt->execute()) {
    echo "<p>Gracias por tu mensaje, $nombre. Te responderé pronto.</p>";
  } else {
    echo "<p>Error al enviar el mensaje.</p>";
  }
}
?>
<a href="index.php">Volver al inicio</a>