<?php
require_once __DIR__.'/../vendor/autoload.php';
//Usuarios nombre de la clase
use Daw\models\Usuarios;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pagina home del proyecto</title>
  </head>
  <body>
    <h1>Listado de Usuarios</h1>
    <?php

    $t=new Usuarios();

    $resultado=$t->mostrarUsuario();
    foreach ($resultado as $fila) {

      echo "<b>Usuario:</b> ".$fila['nombre']."<br>";
      echo "<b>Apellidos:</b> ".$fila['apellidos']."<br>";
      echo "<b>Edad:</b> ".$fila['edad']."<br>";
      echo "<b>Curso:</b> ".$fila['curso']."<br>";
      echo "<b>Puntuacion:</b> ".$fila['puntuacion']."<br>";
      echo "<b>Correo:</b> ".$fila['correo']."<br>";
      echo "<br>";


    }




    ?>

    <form action="actualizarUsuariosForm.php">
      <input type="submit" value="Vamos a actualizar">
    </form>

  <br>

    <form action="borrarUsuariosForm.php">
      <input type="submit" value=" Vamos a borrar">
    </form>

    <br>

    <form action="insertarUsuariosForm.php">
      <input type="submit" value="Vamos a insertar">
    </form>


  </body>
</html>
