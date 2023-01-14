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
            <h1 class="titulo">Galeria de Fotos</h1>
        </div>
    </header>
    <section class="fotos">
        <div class="contenedor">
            <?php foreach($fotos as $foto): ?>
                <div class="thumb">
                    <a href="foto.php?id=<?php echo $foto['id']; ?>">
                        <img src="fotos/<?php echo $foto['imagen']; ?>" alt="<?php echo $foto['titulo']; ?>">
                    </a>
                </div>
            <?php endforeach; ?> 
        </div>

        <div class="paginacion">
            <?php if($pagina_actual > 1): ?>
                <a href="index.php?p=<?php echo $pagina_actual-1; ?>" class="izquierda">Página Anterior</a>
            <?php endif; ?>
            <?php if($total_paginas != $pagina_actual): ?>
                <a href="index.php?p=<?php echo $pagina_actual+1; ?>" class="derecha">Página Siguiente</a>
            <?php endif; ?>
            <!-- <a href="#" class="izquierda">Página Anterior</a>
            <a href="#" class="derecha">Página Siguiente</a> -->
        </div>
    </section>
    <footer>
        <p class="copyright">
            Galeria creada por Gabriel Gamez
        </p>
    </footer>
</body>
</html>