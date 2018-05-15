<?php
namespace Daw\models;
?>

<?php
/* */
class Sesiones extends Usuarios
{
	private $usuarios=null;

  function __construct($nombre)
  {
    session_start();
		if(isset($_SESSION["nombre"])){
			//Sesion ya se habia establecido y se habia almacenado el usuario
			$this->usuarios=$_SESSION["nombre"];
		}else {
			//Sesion aun no se ha registrado
			if ($nombre!=null) {
				//Si se envia el usuario por lo que se registtra el usuario
				$_SESSION["nombre"]=$nombre;
				$this->usuarios=$_SESSION["nombre"];
			}//else el usuario see quedara en null
  	}
  }


  public function getUsuario(){
	return $this->usuarios;
  }
  public function addUsuario($usuario){
	$_SESSION['nombre']=$usuario;
	$this->usuarios=$usuario;
  }


	/* Funcion para cerrar sesion*/
  public function logout(){
    $_SESSION=[];
	  session_destroy();
  }
}
  ?>
