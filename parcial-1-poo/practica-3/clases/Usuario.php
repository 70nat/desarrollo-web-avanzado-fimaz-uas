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
        /* Validacion del formato del correo electronico */
        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("El Formato del correo es invalido: " . $correo);
        }
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
}