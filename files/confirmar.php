<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/proyecto/css/style.css">

    <title>Confirmar</title>
</head>

<body>
    <form method="POST" class="form"> 
        <h2>¿Esta seguro de subir esta imagen?</h2>
        <input type="submit" class="butsi" value="Acepto!" name="confirm">
        <input type="submit" class="butno" value="No, cancelar!" name="cancel">
</form>
</body>
</html>

<?php 
$nameimg = $_GET['nameimg']; 
$origen = 'tmp/'.$nameimg;
$destino = '../images/';
if(isset($_POST['confirm'])){ 

    if(copy($origen, $destino.$nameimg)) { 
        unlink($origen);

    echo '<script type="text/javascript">'; echo 'alert("Su imagen quedó almacenada correctamente, será redireccionado al inicio.")'; echo '</script>';
    echo   "<script> location.href ='../index.php';</script>";
} }
if(isset($_POST['cancel'])){     
    unlink($origen);
    echo '<script type="text/javascript">'; echo 'alert("Su imagen fue eliminada de nuestro servidor, será redireccionado al inicio.")'; echo '</script>';
    echo   "<script> location.href ='../index.php';</script>";
}
