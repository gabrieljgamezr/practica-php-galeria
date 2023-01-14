<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <title>Galeria - PHP</title>
</head>
<body>
    <header>
        <div class="contenedor">
            <h1 class="titulo">Foto: <?php if(!empty($foto['titulo'])) {
                echo $foto['titulo'];
            }else {
                echo $foto['imagen'];
            } ?></h1>
        </div>
    </header>
    
    <div class="contenedor">
        <div class="foto">
            <img src="fotos/<?php echo $foto['imagen']; ?>" alt="">
            <p class="texto"><?php echo $foto['texto']; ?></p>
            <a href="index.php" class="regresar">Regresar</a>
        </div>
    </div>

    <footer>
        <p class="copyright">
            Galeria creada por Gabriel Gamez
        </p>
    </footer>
</body>
</html>