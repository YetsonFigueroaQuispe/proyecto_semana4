<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>VISTA DEL CONTROLADOR DE PRODUCTO</h2>
    <?php
        foreach($producto as $value){
            echo $value->descripcion .'<br>';
        }
    ?>
</body>
</html>