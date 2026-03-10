<?php
/**
 * Script de prueba para la clase admin.
 * Instancia un objeto administrador y muestra tanto sus atributos 
 * heredados como sus propios métodos.
 * @package Usuarios
 * @author Carlos Said Sanchez Dominguez (70nat)
 */
require 'admin.php';
$objAdmin1 = new admin("Said Sanchez", "said.sanchez@uas.edu.mx");
echo '<p> Nombre: ' . $objAdmin1->getNombre() . '</p>';
echo '<p> Correo: ' . $objAdmin1->getCorreo() . '</p>';
echo '<p> Rol: ' . $objAdmin1->getRol() . '</p>';