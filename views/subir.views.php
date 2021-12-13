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
                Subir Foto</h1>
        </div>
    </header>
    <div class="contenedor">
        <form class="formulario" method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"> <label for="foto">Selecciona tu foto</label>
            <input type="file" id="foto" name="foto">

            <label for="titulo">Título de la foto</label>
            <input type="text" id="titulo" name="titulo">

            <label for="texto">Descripción</label>
            <textarea name="texto" id="texto" placeholder="Agrega una descripción"></textarea>

            <?php if (isset($error)) : ?>
                <p class="error"><?php echo $error; ?></p>
            <?php endif ?>

            <input type="submit" class="submit" value="Subir foto">
    </div>
    </form>

    <footer>
        <p class="copyright">Esta página la creó el novio de la más hermosa</p>
    </footer>
</body>

</html>