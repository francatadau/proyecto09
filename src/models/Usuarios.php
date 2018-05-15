<?php
namespace Daw\models;
/**
 * Plantilla vacia de Db
 */
class Usuarios extends Db
{
  function __construct(){
    parent::__construct();
  }
  //function insercion contra la tabla usuarios
    public function insertarUsuario($nombre,$apellidos,$edad,$curso,$puntuacion,$correo){
         //El parent coge la funcion de $this->error de la pagina Db.php
      if(parent::getError()==false)
      {
        $insertar="INSERT INTO usuarios (nombre, apellidos,edad,curso,puntuacion,correo) VALUES ('$nombre','$apellidos',$edad,$curso,$puntuacion,'$correo')";
             $resultado= parent::getConexion()->query($insertar);
        if (!$resultado) {
           echo "Falló en la insercion de la tabla: (" . parent::getConexion()->errno . ") " . parent::getConexion()->error;
          return false;
        }
        return $resultado;
      }else{
        return false;
      }
    }


    //function actualizar contra la tabla usuarios
     public function actualizarUsuario($id,$nombre,$apellidos,$edad,$curso,$puntuacion,$correo){
          //El parent coge la funcion de $this->error de la pagina Db.php
       if(parent::getError()==false)
       {
           $actualizar="UPDATE usuarios SET nombre='$nombre', apellidos='$apellidos', edad=$edad, curso=$curso,  puntuacion=$puntuacion,  correo='$correo'  WHERE id=$id";
         $resultado= parent::getConexion()->query($actualizar);
         if (!$resultado) {
           echo "Falló la actualizacion de la tabla: (" . parent::getConexion()->errno . ") " . parent::getConexion()->error;
           return false;
         }
         return true;
       }else{
         return false;
       }
     }

     //function borrar contra la tabla usuarios
      public function borrarUsuario($id,$nombre){
           //El parent coge la funcion de $this->error de la pagina Db.php
        if(parent::getError()==false)
        {
            $borrar="DELETE FROM usuarios WHERE id=$id";
             $resultado= parent::getConexion()->query($borrar);

          if (!$resultado) {
            echo "Falló el borrado: (" . parent::getConexion()->errno . ") " . parent::getConexion()->error;
            return false;
          }
          return true;
        }else{
          return false;
        }
      }


      //function mostrar contra la tabla usuarios
       public function mostrarUsuario(){
         //El parent coge la funcion de $this->error de la pagina Db.php
         if(parent::getError()==false){
             $mostrar="SELECT * FROM usuarios";
             $resultado= parent::getConexion()->query($mostrar);

           if (!$resultado) {
             echo "Falló el mostrar: (" . parent::getConexion()->errno . ") " . parent::getConexion()->error;
             return false;
           }else {
             return $resultado;
           }
         }else{
           return false;
         }
       }

}

?>
