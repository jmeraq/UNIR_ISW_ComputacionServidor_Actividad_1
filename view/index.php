<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
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
            <h1 class="display-4">Pokedex</h1>
            <hr>
            <table class="table table-borderless">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Altura</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Peso</th>
                        <th scope="col">Habilidad</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Debilidad</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $number_row=1; ?>
                    <?php foreach ($rowset as $row): ?>

                        <tr>
                            <th scope="row"><?php echo $number_row; ?></th>
                            <td><?php echo $row->nombre ?></td>
                            <td><?php echo $row->altura ?></td>
                            <td><?php echo $row->categoria ?></td>
                            <td><?php echo $row->peso ?></td>
                            <td><?php echo $row->habilidad ?></td>
                            <td><?php echo $row->tipo ?></td>
                            <td><?php echo $row->debilidad ?></td>
                        </tr>
                    <?php $number_row++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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