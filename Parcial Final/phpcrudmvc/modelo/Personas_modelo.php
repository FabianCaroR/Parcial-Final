<?php
  class Personas_modelo{
    private $db;
    private $personas; //array

    public function __construct(){ //Constructor conectar la base base de datos
      require_once("modelo/Conectar.php");
      $this->db=Conectar::conexion();
      $this->personas = array();
    }

    public function get_personas(){
      require("paginacion.php");
      $consulta=$this->db->query("SELECT * FROM DATOS_USUARIOS LIMIT $empezar_desde, $tamano_paginas");
      while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){
        $this->personas[]=$filas;
      }
      return $this->personas;
    }
  }
 ?>