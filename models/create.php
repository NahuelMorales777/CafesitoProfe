<?php

include("../config/app.php");
include("../clases/Pedido.php");

$pedido = [
    "nombre" => $_POST['nombre'],
    "apellido" => $_POST['apellido'],
    "cantidad" => $_POST['cantidad'],
    "precio" => $_POST['precio'],
    "vendedor" => $_POST['vendedor'],
    "producto" => $_POST['producto'] 
];

Pedido::create($pedido, $db);
