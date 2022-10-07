<?php

class Database{
     private $host="localhost";
     private $user="root";
     private $pass="";
     private $database="biblioteca";

     function conectar(){
        try {
            $conect=new PDo("mysql:host=$this->host;dbname=$this->database",$this->user,$this->pass);
            $conect->setAttribute
            (PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXEPTION);
            echo"MK estas conectado";
        } catch (\Throwable $th){
            
        }
     }
}

?>