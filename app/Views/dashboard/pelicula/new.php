<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $tituloPagina ?></title>
</head>
<body>
<h3>Registrando una nueva pelicula</h3>
<?php echo view('partials/_from-error'); ?>
    <form action="/dashboard/pelicula/create" method="post">

    <div class="col">
        <label for="nombrePelicula">NOMBRE DE LA PELICULA:</label>
        <input type="text" name="nombrePelicula" id="nombrePelicula" value="">
    </div>

    <div>
        <label for="descripcionPelicula">DESCRIPCION DE LA PELICULA</label>
        <textarea name="descripcionPelicula" id="descripcionPelicula" cols="30" rows="10"></textarea>
    </div>
  <button type="submit">Guardar</button> 
</body>
</html>