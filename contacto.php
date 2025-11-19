<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Contacto</title>
  <link rel="stylesheet" href="estilos.css">
</head>
<body>
  <header><h1>Formulario de Contacto</h1></header>
  <form action="enviar.php" method="POST">
    <label>Nombres:<input type="text" name="nombre" required></label>
    <label>Correo:<input type="email" name="correo" required></label>
    <label>Mensaje:<textarea name="mensaje" required></textarea></label>
    <button type="submit">Enviar</button>
  </form>
  <footer><a href="index.php">Volver al inicio</a></footer>
</body>
</html>