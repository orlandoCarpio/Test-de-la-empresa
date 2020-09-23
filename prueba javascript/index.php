<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="jquery.js"></script>
    <script src="funciones.js"></script>
    <script src="script.js"></script>
</head>
<body>
    <?php session_start();?>
    <div class="contenedor">
        <input type="hidden" name="" id="id"value="<?php echo $_GET['id']; ?>">
        <p><h3>ID recibido :<?php echo $_GET['id']; ?></h3></p>
        <p class="error">Valor incorrecto.</p> 
        <ul id="lista"></ul>
    </div>
</body>
</html>