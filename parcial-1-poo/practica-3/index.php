<?php
/**
 * Script de prueba para la instanciación de usuarios con manejo de excepciones.
 * Permite validar la creación de objetos Admin y Alumno.
 * @package Usuarios
 * @author Carlos Said Sanchez Dominguez (70nat)
 */
require_once 'clases/Admin.php';
require_once 'clases/Alumno.php';   

try{
    $objAdmin1 = new Admin("Said Sanchez", "said.sanchez@uas.edu.mx");
    echo '<p> Nombre: ' . $objAdmin1->getNombre() . '</p>';
    echo '<p> Correo: ' . $objAdmin1->getCorreo() . '</p>';
    echo '<p> Rol: ' . $objAdmin1->getRol() . '</p>';

    $objAlumno1 = new Alumno("Maria Lopez", "maria.lopez@uas.edu.mx", "20230001");
    echo '<p> Nombre: ' . $objAlumno1->getNombre() . '</p>';
    echo '<p> Correo: ' . $objAlumno1->getCorreo() . '</p>';
    echo '<p> Rol: ' . $objAlumno1->getRol() . '</p>';

$objAlumno2 = new Alumno("Juan Perez", "juan.perez.as.edu.mx", "20230002");
    echo '<p> Nombre: ' . $objAlumno2->getNombre() . '</p>';
    echo '<p> Correo: ' . $objAlumno2->getCorreo() . '</p>';
    echo '<p> Rol: ' . $objAlumno2->getRol() . '</p>';
} catch (Exception $e)

    {
     echo "Error: Error controlado en la creacion del objeto Admin: " . $e->getMessage();
    }
    ?>