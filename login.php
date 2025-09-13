<?php

session_start();

include 'conexion.php';

if(isset($_POST['usuario'])){
    $usuario = $_POST['usuario'];
}else{

    $usuario="este usuario ya esta registrado dentro de la base de datos";
}


if(isset($_POST['contrasena'])){

    $contrasena = $_POST['contarsena'];
}else{

    $contrasena ="esta conreasena ya esta regitrado dentro de la base de datos";
}
