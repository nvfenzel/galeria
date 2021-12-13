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
                Mi galería
            </h1>
        </div>
    </header>
    <section class="fotos">
        <div class="contenedor">
            <?php foreach ($fotos as $fotos) : ?>
                <div class="thumb">
                    <a href="foto.php?id=<?php echo $fotos['id']; ?>">
                        <img src="fotos/<?php echo $fotos['imagen'] ?>" alt="">
                    </a>
                </div>
            <?php endforeach; ?>
            <div class="paginacion">
                <?php if ($pagina_actual > 1) : ?>
                    <a href="index.php?p=<?php echo $pagina_actual - 1; ?>" class="izquierda"><i class="fa fa-long-arrow-left"></i> Página Anterior</a>
                <?php endif; ?>
                <?php if ($total_paginas != $pagina_actual) : ?>
                    <a href="index.php?p=<?php echo $pagina_actual + 1; ?>" class="derecha">Página Siguiente <i class="fa fa-long-arrow-right"></i></a>
                <?php endif; ?>
                <div class="archivos">
                    <a href="subir.php" class="centro"> Subir</a>
                </div>
                <!-- <a href="#" class="izquierda"><i class="fa fa-long-arrow-left"></i> Página Anterior</a>
                <a href="#" class="derecha">Página Siguiente <i class="fa fa-long-arrow-right"></i></a> -->
            </div>
        </div>
    </section>
    <footer>
        <p class="copyright">Esta página la creó el novio de la más hermosa</p>
    </footer>
</body>

</html>