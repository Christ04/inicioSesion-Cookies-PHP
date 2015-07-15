<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'Usuario.php';
$usuario = $_POST["inputUsuario"];
$contrasena = $_POST["inputContrasena"];

$usuario1 = new Usuario();
$usuario1->setId(1);
$usuario1->setNombreUsuario("christian");
$usuario1->setContrasena("christianadmin");

$usuario2 = new Usuario();
$usuario2->setId(2);
$usuario2->setNombreUsuario("camila");
$usuario2->setContrasena("camilaadmin");

$usuario3 = new Usuario();
$usuario3->setId(3);
$usuario3->setNombreUsuario("marcela");
$usuario3->setContrasena("marcelaadmin");

//Array de Objetos
$usuariosRegistrados = array($usuario1, $usuario2, $usuario3);

$encontrado = false;
foreach ($usuariosRegistrados as $usuarioReg) {
    if ($usuario == $usuarioReg->getNombreUsuario() && $contrasena == $usuarioReg->getContrasena()) {
        echo "<center><p>Bienvenido $usuario</p><p>fecha:" . date("d-m-Y-l h:i:sa") ."</p> <a href='perfil.php'>Mi perfil</a> </center>";
        setcookie("usuarioLogueado", $usuario);
        $encontrado = true;
        break;
    }
}

if(!$encontrado){
    echo "<center><p>Usuario no encontrado</p> <a href='index.php'>Iniciar Sesion</a> </center>";
}

?>

