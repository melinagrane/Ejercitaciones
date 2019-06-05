<?php session_start();
if($_POST){
  $_SESSION['nombre'] = $_POST['nombre'];
  $_SESSION['color'] = $_POST['colorPreferido'];
  header(Location: 'perfil.php');
}
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>

  <form action="perfil.php" method="post">

    <h3>Nombre:
      <input type="text" name="nombre" value="">
    </h3>

    <h3>¿Cuál es tu color preferido?
      <select name="colorPreferido">
        <option value="">Elegí un color...</option>
        <option value="Red">Rojo</option>
        <option value="Blue">Azul</option>
        <option value="Green">Verde</option>
        <option value="Yellow">Amarillo</option>
        <option value="Orange">Naranja</option>
      </select>
    </h3>

    <p>
      <input type="submit" name="setear" value="Enviar">
    </p>

  </form>

</body>
</html>
