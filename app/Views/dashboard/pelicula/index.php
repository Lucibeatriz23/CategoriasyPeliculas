<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?php echo $tituloPagina;?></title>
</head>
<body>
    <h2>Lista de peliculas</h2>
    <a href="/dashboard/categoria/">ver categorias</a>
    <table>
        <tr>
            <th>No</th>
            <th>Pelicula</th>
            <th>Descripcion</th>
            <th>Ver</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>

        <?php foreach($peliculas as $p): ?>
            <tr>
                <td>1</td>
                <td><?php echo $p->titulo ?></td>
                <td><?php echo $p->descripcion ?></td>
                <td>
                    <a href="/dashboard/pelicula/show/<?php echo $p->id; ?>">
                        Ver
                    </a>    
                </td>

                <td>
                    <a href="/dashboard/pelicula/edit/<?php echo $p->id; ?>">
                        Editar
                    </a>
                </td>
                <td>
                    <form action="/dashboard/pelicula/delete/<?php echo $p->id; ?>" method="post">
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        <?php endforeach;?>
    </table>
    <a href="/dashboard/pelicula/new">Nueva pelicula</a>
</body>
</html>