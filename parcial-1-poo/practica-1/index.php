<?php
/**
 * Script de prueba para la clase Usuario.
 * Instancia un objeto, muestra sus valores iniciales,
 * los actualiza utilizando metodos de acceso y los vuelve a mostrar.
 * @package Usuarios
 * @author Carlos Said Sanchez Dominguez (70nat)
 */

require 'Usuario.php';
$objUsuario1 = new Usuario("Said Sanchez", "said.sanchez@uas.edu.mx"); 
echo '<p> Nombre: ' . $objUsuario1->getNombre() . '</p>';
echo '<p> Correo: ' . $objUsuario1->getCorreo() . '</p>';
/* Actualización de los atributos del objeto */
$objUsuario1->setNombre("Said Sanchez Dominguez");
$objUsuario1->setCorreo("said.sanchez.dominguez@uas.edu.mx");
/* Salida de los datos actualizados */
echo '<p> Nombre actualizado: ' . $objUsuario1->getNombre() . '</p>';
echo '<p> Correo actualizado: ' . $objUsuario1->getCorreo() . '</p>';
?>