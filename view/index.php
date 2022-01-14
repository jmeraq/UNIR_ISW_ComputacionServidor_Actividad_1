<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Pokedex</title>
</head>
<body>
<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Pokedex</a>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="display-4">Pokedex <a href="index.php?route=formulario" class="btn btn-primary">Nuevo Pokemon</a></h1>
            <hr>
            <table class="table table-borderless">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Nombre Deletreado</th>
                        <th scope="col">Altura</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Categoria Deletreado</th>
                        <th scope="col">Peso</th>
                        <th scope="col">Habilidad</th>
                        <th scope="col">Habilidad Deletreado</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Debilidad</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $number_row=1; ?>
                    <?php foreach ($rowset as $row): ?>

                        <tr>
                            <th scope="row"><?php echo $number_row; ?></th>
                            <td><?php echo $row->nombre ?></td>
                            <td>
                                <?php
                                    $i = strlen($row->nombre);
                                    $nombre_array= str_split($row->nombre);
                                    for ($c=0;$c<$i;$c++){
                                        echo '<span class="badge bg-success">'.strtoupper($nombre_array[$c]).' </span> ';
                                    }
                                ?>
                            </td>
                            <td><?php echo $row->altura ?></td>
                            <td><?php echo $row->categoria ?></td>
                            <td>
                                <?php
                                    $i = strlen($row->categoria);
                                    $nombre_array= str_split($row->categoria);
                                    $c=0;
                                    while ($c<$i){
                                        echo '<span class="badge bg-info">'.strtoupper($nombre_array[$c]).' </span> ';
                                        $c++;
                                    }
                                ?>
                            </td>
                            <td><?php echo $row->peso ?></td>
                            <td><?php echo $row->habilidad ?></td>
                            <td>
                                <?php
                                    $i = strlen($row->habilidad);
                                    $nombre_array= str_split($row->habilidad);
                                    $c=0;
                                    do{
                                        echo '<span class="badge bg-warning">'.strtoupper($nombre_array[$c]).' </span> ';
                                        $c++;
                                    }while ($c<$i)
                                ?>
                            </td>
                            <td><?php echo $row->tipo ?></td>
                            <td><?php echo $row->debilidad ?></td>
                            <td><a href="index.php?route=formulario&id=<?php echo $row->id;?>" class="btn btn-primary">Edit</a></td>
                            <td><a href="index.php?route=delete&id=<?php echo $row->id;?>" class="btn btn-danger" onclick="return confirm('Estas seguro de eliminar este pokemon ?');">Delete</a></td>
                        </tr>
                    <?php $number_row++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
</body>
<hr>
<footer class="container">
    <div class="row">
        <div class="col">
            <span class="text-muted">© <?php echo date("Y") ?> Junior Mera</span>
        </div>
    </div>
</footer>
</html>