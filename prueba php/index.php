<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="contenedor">
        <?php
            session_start();
            include "Funciones.php";
            if (isset($_GET['id'])) {
                $funciones=new Funciones($_GET['id']);
                $id=$_GET['id'];
                echo"<h3>ID recibido : ".$id."</h3>";
                if($funciones->entero()){
                    if($funciones->mayor() && $funciones->par() && $funciones->positivo() ){
                        $funciones->guardar();                      
                    }
                    else{
                        echo"<h4>numero incorrecto</h4>";
                    }
                }else {
                        echo"<h4>No valido</h4>";
                }     
                if(sizeof($_SESSION['array'])==10){
                    $funciones->mostrar($_SESSION['array']);                
                }
            }
        ?>
    </div>
</body>
</html>