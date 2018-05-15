<?php
require_once __DIR__.'/../vendor/autoload.php';
//Usuarios nombre de la clase
use Daw\models\Usuarios;
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Prueba de conexion</title>
  </head>
  <body>

    <?php

  $t=new Usuarios();

          //Hacemos variabes para los $_POST
          $id=$_POST["id"];
          $nombre=$_POST["nombre"];
          $apellidos=$_POST["apellidos"];
          $edad=$_POST["edad"];
          $curso=$_POST["curso"];
          $puntuacion=$_POST["puntuacion"];
          $correo=$_POST["correo"];

    $resultado=$t->actualizarUsuario($id,$nombre,$apellidos,$edad,$curso,$puntuacion,$correo);
    $listar=$t->mostrarUsuario();


    foreach ($listar as $fila) {

      echo "<b>Usuario:</b> ".$fila['nombre']."<br>";
      echo "<b>Apellidos:</b> ".$fila['apellidos']."<br>";
      echo "<b>Edad:</b> ".$fila['edad']."<br>";
      echo "<b>Curso:</b> ".$fila['curso']."<br>";
      echo "<b>Puntuacion:</b> ".$fila['puntuacion']."<br>";
      echo "<b>Correo:</b> ".$fila['correo']."<br>";
      echo "<br>";


    }
?>

    <form action="insertarUsuariosForm.php">
      <input type="submit" value="Volver a insertar">
    </form>
    <br> <br>
    <form action="mostrarUsuarios.php">
      <input type="submit" value="Mostrar Usuarios">
    </form>
    <br> <br>
    <form action="actualizarUsuariosForm.php">
      <input type="submit" value="Volver a actualizar">
    </form>


  </body>
</html>
