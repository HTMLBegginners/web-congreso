<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 */

class Usuario {

    private $nombreUsuario;
    private $password;
    private $rol;

    public function __construct($row) {
        $this->nombreUsuario = $row['nombreUsuario'];
        $this->password = $row['password'];
        $this->rol = $row['rol'];
    }
    
    function getNombreUsuario(){
        return $this->nombreUsuario;
    }
    function getPassword(){
        $this->password;
    }
    function getRol(){
        return $this->rol;
    }

}