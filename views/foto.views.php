<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400&family=Raleway:ital,wght@0,400;1,200&family=Slabo+27px&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1e8e12488d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <title>Galería</title>
</head>

<body>
    <header>
        <div class="contenedor">
            <h1 class="titulo">
                Foto: <?php if (!empty($foto['titulo'])) {
                            echo $foto['titulo'];
                        } else {
                            echo $foto['imagen'];
                        } ?> </h1>
        </div>
    </header>
    <div class="conetendor">
        <div class="foto">
            <img src="fotos/<?php echo $foto['imagen']; ?>" alt="">
            <p class="texto"><?php echo $foto['texto'] ?></p>
            <a href="index.php" class="regresar"><i class="fa fa-long-arrow-left"></i> Regresar</a>
        </div>
    </div>
    <footer>
        <p class="copyright">Esta página la creó el novio de la más hermosa</p>
    </footer>
</body>

</html>