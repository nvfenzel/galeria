<?php
require 'funciones.php';

$conexion = conexion('prueba_galeria', 'root', 'Santuygio123+');

if (!$conexion) {
    die();
}

$id = isset($_GET['id']) ? (int)$_GET['id'] : false;

if (!$id) { //esto es para que si el usuario completa el url con cualquier cosa que no sea un id lo mande al index
    header('Location: index.php');
}

$statement = $conexion->prepare('SELECT * FROM fotos WHERE id = :id');

$statement->execute(array(':id' => $id));

$foto = $statement->fetch();

if (!$foto) { //si no hay foto en el id lo mandamos al index
    header('Location: index.php');
}

require 'views/foto.views.php';
