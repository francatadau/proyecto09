<?php
$nombre=$_POST["nombre"];

if($nombre == 'admin')
{
  header("Location:../index.php");
}else {
   header("Location:index.php");
}
 ?>
