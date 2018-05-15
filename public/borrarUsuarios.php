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



    $resultado=$t->borrarUsuario($id,$nombre);
    $listar=$t->mostrarUsuario();

    echo "<b>El usuario que has borrado ha sido:</b> ".$nombre."<br> ";
    echo "<br>";





    ?>





  </body>
</html>

    <form action="mostrarUsuarios.php">
      <input type="submit" value="Mostrar Usuarios">
    </form>
    <br> <br>
    <form action="insertarUsuariosForm.php">
      <input type="submit" value="Volver a insertar">
    </form>
    <br> <br>
    <form action="actualizarUsuariosForm.php">
      <input type="submit" value="Volver a actualizar">
    </form>
    <br> <br>
    <form action="borrarUsuariosForm.php">
      <input type="submit" value="Volver a borrar">
    </form>


  </body>
</html>
