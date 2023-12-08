<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?php echo $tituloPagina;?></title>
</head>
<body>
    <h2>Lista de categorias</h2>
    <a href="/dashboard/pelicula/">ver peliculas</a>
    <table>
        <tr>
            <th>No</th>
            <th>Categoria</th>
            <th>Ver</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>

        <?php foreach($categorias as $c): ?>
            <tr>
                <td>1</td>
                <td><?php echo $c->titulo ?></td>
                <td>
                    <a href="/dashboard//categoria//show/<?php echo $c->id; ?>">
                        Ver
                    </a>    
                </td>

                <td>
                    <a href="/dashboard//categoria//edit/<?php echo $c->id; ?>">
                        Editar
                    </a>
                </td>
                <td>
                    <form action="/dashboard//categoria//delete/<?php echo $c->id; ?>" method="post">
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        <?php endforeach;?>
    </table>
    <a href="/dashboard/categoria/new">Nueva categoria/</a>
</body>
</html>