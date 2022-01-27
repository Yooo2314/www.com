<?php

class conexion{

 
  private $user = "root";
  private $pass = "";
  //private $db_name = "db_fotografia";
 //private $con = "localhost";
    
  function conectar(){

      try{
      
        $pdo = new PDO("mysql:host=localhost;database=db_fotografia", $this->user, $this->pass ); 
        echo "Conexion correcta";

      }catch(PDOException $error){
          echo "Conexion errada" . $error->getMessage();

      }
      
  }

}

$nuevaconexion = new conexion();
$nuevaconexion->conectar();

