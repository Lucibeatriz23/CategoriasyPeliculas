<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $tituloPagina; ?></title>
</head>
<body>
    <h3>Editando Informacion</h3>
    <form action="/dashboard/categoria/update/ <?php echo $categoria->id; ?>" method="post">

    <div class="col">
        <label for="nombreCategoria">NOMBRE DE LA CATEGORIA:</label>
        <input type="text" name="nombreCategoria" id="nombreCategoria" value="<?php echo $categoria->titulo; ?>">
    </div>

  <button type="submit">Guardar</button>  

    </form>
</body>
</html>