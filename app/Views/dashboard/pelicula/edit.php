<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $tituloPagina; ?></title>
</head>
<body>
    <h3>Editando Informacion</h3>
    <form action="/dashboard/pelicula/update/ <?php echo $pelicula->id; ?>" method="post">

    <div class="col">
        <label for="nombrePelicula">NOMBRE DE LA PELICULA:</label>
        <input type="text" name="nombrePelicula" id="nombrePelicula" value="<?php echo $pelicula->titulo; ?>">
    </div>

    <div>
        <label for="descripcionPelicula">DESCRIPCION DE LA PELICULA</label>
        <textarea name="descripcionPelicula" id="descripcionPelicula" cols="30" rows="10"><?php echo $pelicula->descripcion; ?></textarea>
    </div>
  <button type="submit">Guardar</button>  

    </form>
</body>
</html>