<?php
/**
 * Clase que gestiona la información de un Usuario.
 * Esta clase permite representar a un usuario del sistema
 * @package Usuarios
 * @author Carlos Said Sanchez Dominguez (70nat)
 */
class Usuario {
    private  $vNombre;
    private  $vCorreo;
    
    /**
     * Constructor de la clase Usuario.
     * Inicializa el objeto asignando los parámetros temporales 
     * a los atributos permanentes de la clase.
     * @param string $nombre Nombre inicial del usuario.
     * @param string $correo Correo inicial del usuario.
     */
    public function __construct($nombre, $correo)
     {
        $this->vNombre = $nombre;
        $this->vCorreo = $correo;
    }
    
    /**
     * Obtiene el nombre del usuario.
     * @return string El nombre almacenado.
     */
    public function getNombre() 
    {
        return $this->vNombre;
    }
    
    /**
     * Obtiene el correo del usuario.
     * @return string El correo almacenado.
     */
    public function getCorreo()
     {
        return $this->vCorreo;
    }
    
    /**
     * Actualiza el nombre del usuario.
     * @param string $nombre Nuevo nombre a asignar.
     */
    public function setNombre($nombre) 
    {
        $this->vNombre = $nombre;
    }
    
    /**
     * Actualiza el correo del usuario.
     * @param string $correo Nuevo correo a asignar.
     */
    public function setCorreo($correo) 
    {
        $this->vCorreo = $correo;
    }
}