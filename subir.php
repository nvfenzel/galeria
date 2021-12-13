<?php

require 'funciones.php';

$conexion = conexion('prueba_galeria', 'root', 'Santuygio123+');

if (!$conexion) {
    header('Location: index.php');
    die();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)) { //ACA nos pregunta si subimos una fotO con el if
    // si ponemos print_r($_FILES) nos va a imprimir lo que hayamos cargado en el input foto,
    // esto nos mostraría un array (por el print r) con la descripción que tiene el archivo.
    // diciendo por ejemplo, [name] = 1.jpg [type] = image/jpeg tmp_name (LUGAR DONDE SE SUBE LA 
    // FOTO TEMPORALMENTE CUANDO LA ESTAMOS SUBIENDO, ES DECIR, LA RUTA)=sdfsdfsdf.
    $check = @getimagesize($_FILES['foto']['tmp_name']); //ACA SE ACCEDE A LA VARIABLE FILES, A LA FOTO Y DESPUÉS A LA VARIABLE TEMPORAL
    //Y CON GETIMAGENSIZE NOS VA A DEVOLVER UN ARREGLO CON EL TAMAÑO DE LA IMAGEN Y LOS OTROS DATOS.
    //SI LO QUE SE SUBIÓ NO ES UNA IMAGEN VA A DAR FALSE.
    //si hago un print_r(check) nos va a dar un arreglo con 3 datos.
    //el primero lugar con el ancho, el segundo con el alto el tercero con los dos más los canales y el formato
    if ($check !== false) {
        $carpeta_destino = 'fotos/';
        $archivo_subido = $carpeta_destino . $_FILES['foto']['name'];
        move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subido);

        $statement = $conexion->prepare('INSERT INTO fotos (titulo, imagen, texto) VALUES (:titulo, :imagen, :texto)');

        $statement->execute(array(':titulo' => $_POST['titulo'], ':imagen' => $_FILES['foto']['name'], ':texto' => $_POST['texto']));

        header('Location: index.php');
    } else {
        $error = "El archivo no es una imagen o es muy pesado";
    }
}
require 'views/subir.views.php';
