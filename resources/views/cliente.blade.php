<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h2>VISTA DEL CONTROLADOR DE CLIENTE</h2>
    <?php
        foreach($cliente as $value){
            echo $value->numero .'<br>';
        }
    ?>
    <a class="btn btn-primary" href="compra">COMPRA</a>
    <br>
    <a class="btn btn-primary" href="compradetalle">COMPRA Y DETALLE</a>
    <br>
    <a class="btn btn-secondary" href="producto">PRODUCTO</a>
    <br>
    <a class="btn btn-success" href="proveedor">PROVEEDOR</a>
    <br>
    <a class="btn btn-danger" href="usuario">USUARIO</a>
    <br>
    <a class="btn btn-warning" href="venta">VENTA</a>
    <br>
    <a class="btn btn-dark" href="ventadetalle">VENTA Y DETALLE</a>
    <br>
</body>
</html>