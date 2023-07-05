<!DOCTYPE html>
<html>
<head>
    <title>Contactos</title>
    <link rel="icon" type="image/jpg" href="public/img/favicon.jpg">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php require_once"dependecias.php"; ?>
</head>

<body>
    <div class="container">
    <?php require_once"menu.php"; ?>
        <div class="jumbotron">
            <h1 class="display-4">Contactos</h1>
                <button class="btn btn-primary">
                    <span class="fa-solid fa-user-plus"></span>  Agregar Contactos
                </button>
            <hr class="my-4">
            <div id="cargatablacontactos"></div>
        </div>

    </div>

    <script src="public/js/contactos.js"></script>
</body>
</html>