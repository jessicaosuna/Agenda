<!DOCTYPE html>
<html>
<head>
    <title>Categorias de los Contactos</title>
    <link rel="icon" type="image/jpg" href="public/img/favicon.jpg">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php require_once"dependecias.php"; ?>
</head>

<body>
    <div class="container">
        <?php require_once"menu.php"; ?>

        <div class="jumbotron">
            <h1 class="display-4">Categorias de los Contactos</h1>
                <button class="btn btn-primary" data-toggle="modal" data-target="modalagregarcategoria">
                    <span class="fa-solid fa-file-circle-plus"></span>  Agregar Categoria
                </button>
             <hr class="my-4">
                 <div id="cargatablacategorias"></div>
        </div> 

        <?php require_once"categorias/modalagregar.php"; ?>

    </div>

  <script src="public/js/categorias.js"></script>
</body>
</html>