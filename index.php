<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <title>Subir imagenes</title>
</head>

<body>
    <form method="POST" action="files/subirimagen.php" class="form" enctype="multipart/form-data"> 
        <h2>Suba su imagen</h2>
        <input type="file" required="true" name="imagen[]" aria-describedby="fileHelp" multiple>
             <button type="submit">Subir archivos</button> 

</form>
</body>
</html>