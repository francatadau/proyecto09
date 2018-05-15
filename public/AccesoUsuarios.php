<?php
require_once __DIR__.'/../vendor/autoload.php';
//Usuarios nombre de la clase
use Daw\models\Usuarios;
?>
<!DOCTYPE html>
<html>
<head>
  <title>Demo de menú desplegable</title>
  <meta charset="utf-8" />
</head>
<body>
  <div align="center">
    <p>Seleccione un usuario del siguiente menú:</p>
    <p>Usuarios:

  <form action="juegoahorcado/index.php" method="post">
        <select name="nombre">

            <?php

            //Generamos nuevo objeto
            $acceder=new Usuarios();

            //Usamos la funcion
            $mostrar=$acceder->mostrarUsuario();




            //Creamos foreach para mostrar los usuarios dentro del option

            foreach ($mostrar as $lista) {
              echo "<option value='".$lista["nombre"]."'>".$lista["nombre"]."</option>";
            }





          ?>
        </select>
        <input type="submit" name="entrar" value="Vamos al ahorcado">
  </form>




      <br>
      <form action="index.php">
        <input type="submit" value="Atras">
      </form>
    </p>
  </div>
</body>

</html>
