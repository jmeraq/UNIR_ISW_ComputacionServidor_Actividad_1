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
    <h1>Formulario <a href="index.php" class="btn btn-primary">Volver al listado</a></h1>
    <hr>

    <form action="index.php?route=save" method="post">
        <input type="hidden" class="form-control" id="id" name="id"  value="<?php echo $pokemon->id;?>">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="" placeholder="Nombre del Pokemon" value="<?php echo ($pokemon->id!=0) ? $pokemon->nombre : "";?>">
        </div>
        <div class="form-group">
            <label for="altura">Altura</label>
            <input type="text" class="form-control" id="altura" name="altura" placeholder="Altura del Pokemon" value="<?php echo ($pokemon->id!=0) ? $pokemon->altura : "";?>">
        </div>
        <div class="form-group">
            <label for="peso">Peso</label>
            <input type="peso" class="form-control" id="peso" name="peso" placeholder="Peso del Pokemon" value="<?php echo ($pokemon->id!=0) ? $pokemon->peso : "";?>">
        </div>
        <div class="form-group">
            <label for="categoria">Categoria</label>
            <input type="text" class="form-control" id="categoria" name="categoria" placeholder="Ingrese la categoria" value="<?php echo ($pokemon->id!=0) ? $pokemon->categoria : "";?>">
        </div>
        <div class="form-group">
            <label for="habilidad">Habilidad</label>
            <input type="text" class="form-control" id="habilidad" name="habilidad" placeholder="Ingrese la habilidad" value="<?php echo ($pokemon->id!=0) ? $pokemon->habilidad : "";?>">
        </div>
        <div class="form-group">
            <label for="tipo">Tipo</label>
            <input type="text" class="form-control" id="tipo" name="tipo" placeholder="Ingrese el tipo" value="<?php echo ($pokemon->id!=0) ? $pokemon->tipo : "";?> ">
        </div>
        <div class="form-group">
            <label for="debilidad">Debilidad</label>
            <input type="text" class="form-control" id="debilidad" name="debilidad" placeholder="Ingresa la debilidad" value="<?php echo ($pokemon->id!=0) ? $pokemon->debilidad : "";?>">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</body>
<hr>
<footer class="container">
    <div class="row">
        <div class="col">
            <span class="text-muted">© <?php echo date("Y") ?> Junior Mera</span>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>