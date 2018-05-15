<?php
require_once __DIR__.'/../../vendor/autoload.php';
//Usuarios nombre de la clase
use Daw\models\Sesiones;

if(isset($_POST['nombre'])){
  $InicioDeSesion=new Sesiones($_POST['nombre']);
}else{
  $InicioDeSesion=new Sesiones(null);
}

if ($InicioDeSesion->getUsuario()==null) {
  header("location:../index.php");
}
    echo "Has iniciado sesion como: ".$InicioDeSesion->getUsuario()."<br>";
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<link rel="stylesheet" href="estilo.css">
    <script type="text/javascript" src="ahorcado.js"> </script>



    <br>

    <form class="" action="Front.html" method="post">

  Pon una letra: <input type="text" value="">   <button type="button" onclick="ComprobarCaracter()" id="boton">Comprobar letra</button>

<br>
<br>
  Comprobacion: <input type="text" value="" size="40" readonly>
<br>
<br>
  Resultado: <input type="text" value="" size="40" readonly> <br>
<br>
<br>
  Letras Falladas: <input type="text" value="" size="15" readonly>

    </form>

<br>
  <!-- Creamos boton de logOut -->
  <form action="../AccesoUsuarios.php">
  <input type="submit" value="Cerrar Sesion">

  <?php
  //Creamos variable y usamos la funcion de logout alojada en Sesiones.php
  // ($InicioDeSesion lo cogemos donde usamos el objetos Sesiones)
   ?>
  </form>

  </body>
</html>
