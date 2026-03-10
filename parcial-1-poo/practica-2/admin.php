<?php
require 'Usuario.php';
/**
 * Clase que representa a un Administrador del sistema.
 * Hereda de la clase base usuario para extender su funcionalidad.
 * @package Usuarios
 * @author Carlos Said Sanchez Dominguez (70nat)
 */
class admin extends usuario{
    public function getRol(){
        return "Administrador";
    }
}