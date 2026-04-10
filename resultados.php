<?php
if (isset($_GET['marca']) && isset($_GET['modelo']) && isset($_GET['color'])) {
    $marca = htmlspecialchars($_GET['marca']);
    $modelo = htmlspecialchars($_GET['modelo']);
    $color = htmlspecialchars($_GET['color']);

    // Funciones nativas de PHP
    $cantletrasmarca = strlen($marca);
    $cantletrasmodelo = strlen($modelo);
    $cantletrascolor = strlen($color);

    $marcaMayus = strtoupper($marca);
    $modeloMayus = strtoupper($modelo);
    $colorMayus = strtoupper($color);

    $marcaMinus = strtolower($marca);
    $modeloMinus = strtolower($modelo);
    $colorMinus = strtolower($color);

    // Mostrar resultados
    echo "<h2>Resultados de la búsqueda:</h2>";
    echo "<p>Marca: " . $marca . " (Letras: " . $cantletrasmarca . ", Mayúsculas: " . $marcaMayus . ", Minúsculas: " . $marcaMinus . ")</p>";
    echo "<p>Modelo: " . $modelo . " (Letras: " . $cantletrasmodelo . ", Mayúsculas: " . $modeloMayus . ", Minúsculas: " . $modeloMinus . ")</p>";
    echo "<p>Color: " . $color . " (Letras: " . $cantletrascolor . ", Mayúsculas: " . $colorMayus . ", Minúsculas: " . $colorMinus . ")</p>";

} else {
    echo "<p>Por favor, completa todos los campos.</p>";
}
?>