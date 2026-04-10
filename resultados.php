<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de la búsqueda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="text-white py-4 mb-4 shadow" style="background: linear-gradient(90deg, #0d6efd, #6f42c1);">
    <div class="container text-center">
        <h1 class="display-6 fw-bold mb-0">&#128663; Resultados de la búsqueda</h1>
    </div>
</div>

<div class="container d-flex justify-content-center">
    <div class="card shadow-sm border-0 w-100" style="max-width: 650px;">

        <div class="card-header text-white fw-bold text-center" style="background-color: #6f42c1;">
            Datos del vehículo encontrado
        </div>

        <div class="card-body p-4">
<?php
if (isset($_GET['marca']) && isset($_GET['modelo']) && isset($_GET['color'])) {
    $marca = htmlspecialchars($_GET['marca']);
    $modelo = htmlspecialchars($_GET['modelo']);
    $color = htmlspecialchars($_GET['color']);

    $cantletrasmarca  = strlen($marca);
    $cantletrasmodelo = strlen($modelo);
    $cantletrascolor  = strlen($color);

    $marcaMayus  = strtoupper($marca);
    $modeloMayus = strtoupper($modelo);
    $colorMayus  = strtoupper($color);

    $marcaMinus  = strtolower($marca);
    $modeloMinus = strtolower($modelo);
    $colorMinus  = strtolower($color);
?>
            <table class="table table-bordered table-hover text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Campo</th>
                        <th>Valor</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="fw-semibold text-primary">Marca</td>
                        <td><?= $marca ?></td>
                    </tr>
                    <tr>
                        <td class="fw-semibold text-success">Modelo</td>
                        <td><?= $modelo ?></td>
                    </tr>
                    <tr>
                        <td class="fw-semibold text-danger">Color</td>
                        <td><?= $color ?></td>
                    </tr>
                </tbody>
            </table>
<?php
} else {
?>
            <div class="alert alert-warning text-center mb-0">
                Por favor, completa todos los campos.
            </div>
<?php
}
?>
        </div>

        <div class="card-footer text-center">
            <a href="buscarculajay.html" class="btn btn-outline-primary btn-sm">&#8592; Nueva búsqueda</a>
        </div>

    </div>
</div>

<div>
<?php echo "<div class='alert alert-info text-center mt-4'>¡Gracias por usar nuestro sistema de búsqueda de vehículos!</div>"; ?>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
