<?php
namespace Daw\models;
use mysqli;



 class Db
 {
   //Atributos necesarios para la conexion
   private $host="localhost";
   private $user="root";
   private $pass="";
   private $db_name="juegosanterior";
   //Conector
   private $conexion;
   //Propiedades para controlar errores
   private $error=false;
   function __construct()
   {
       $this->conexion = new mysqli($this->host, $this->user, $this->pass, $this->db_name);
       if ($this->conexion->connect_errno) {
         $this->error=true;
       }
     }

 //Getters y Setters

     public function getHost()
     {
         return $this->host;
     }

     public function setHost($host)
     {
         $this->host = $host;
         return $this;
     }

     public function getUser()
     {
         return $this->user;
     }

     public function setUser($user)
     {
         $this->user = $user;
         return $this;
     }

     public function getPass()
     {
         return $this->pass;
     }

     public function setPass($pass)
     {
         $this->pass = $pass;
         return $this;
     }

     public function getDbName()
     {
         return $this->db_name;
     }

     public function setDbName($db_name)
     {
         $this->db_name = $db_name;
         return $this;
     }

     public function getConexion()
     {
         return $this->conexion;
     }

     public function setConexion($conexion)
     {
         $this->conexion = $conexion;
         return $this;
     }

     public function getError()
     {
         return $this->error;
     }

     public function setError($error)
     {
         $this->error = $error;
         return $this;
     }




 }

?>
