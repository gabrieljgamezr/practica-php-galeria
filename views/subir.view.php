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
            <h1 class="titulo">Subir Foto</h1>
        </div>
    </header>
    
    <div class="contenedor">
        <form class="formulario" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
            <label for="foto">Selecciona tu foto</label>
            <input type="file" id="foto" name="foto">
            <label for="titulo">Título de la foto</label>
            <input type="text" id="titulo" name="titulo">
            <label for="texto">Descripción:</label>
            <textarea name="texto" id="texto" placeholder="Ingresa una descripción"></textarea>

            <?php if(isset($error)): ?>
                <p class="error"><?php echo $error?></p>
            <?php endif ?>

            <input type="submit" class="submit" value="Subir Foto">
        </form>
    </div>

    <footer>
        <p class="copyright">
            Galeria creada por Gabriel Gamez
        </p>
    </footer>
</body>
</html>