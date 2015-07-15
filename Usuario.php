<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author Christian Barco
 */
class Usuario {
    //put your code here
    var $id;
    var $nombreUsuario;
    var $contrasena;
    
    function __construct() {
        
    }
    
    function getNombreUsuario() {
        return $this->nombreUsuario;
    }

    function getContrasena() {
        return $this->contrasena;
    }
    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }

        function setNombreUsuario($nombreUsuario) {
        $this->nombreUsuario = $nombreUsuario;
    }

    function setContrasena($contrasena) {
        $this->contrasena = $contrasena;
    }
    
    public function __toString() {
        echo "usuario x";
    }

    
}
