<?php
require_once 'Usuario.php';
/**
 * Clase que representa a un Alumno del sistema.
 * Hereda de la clase base Usuario para extender su funcionalidad.
 * @package Usuarios
 * @author Carlos Said Sanchez Dominguez (70nat)
 */
class Alumno extends Usuario{
    private$vMatricula;
    public function __construct($nombre, $correo, $matricula)
     {
     parent::__construct($nombre, $correo);
      $this->vMatricula = $matricula;
    }
    public function getMatricula() 
    {
        return $this->vMatricula;
    }
    public function getRol(){
        return "Alumno";
    }
}
