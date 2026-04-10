<?php
if (isset($_GET['marca']) && isset($_GET['modelo'])) {
    $marca = $_GET['marca'];
    $modelo = $_GET['modelo'];

    $marca = htmlspecialchars($marca);
    $modelo = htmlspecialchars($modelo);

    $cantletrasmodelo = strlen($modelo);
    $cantletrasmarca = strlen($marca);
    $convertirminusculasmodelo = strtolower($modelo);
    $convertirminusculasmarca = strtolower($marca);
    $convertirmayusculasmodelo = strtoupper($modelo);
    $convertirmayusculasmarca = strtoupper($marca);

    echo "<h2>Resultados de la búsqueda:</h2>";
    echo "<p>Marca: " . $marca . "</p>";
    echo "<p>Modelo: " . $modelo . "</p>";
    echo "<p>Cantidad de letras en el modelo: " . $cantletrasmodelo . "</p>";
    echo "<p>Cantidad de letras en la marca: " . $cantletrasmarca . "</p>";
    echo "<p>Modelo en minúsculas: " . $convertirminusculasmodelo . "</p>";
    echo "<p>Marca en minúsculas: " . $convertirminusculasmarca . "</p>";
    echo "<p>Modelo en mayúsculas: " . $convertirmayusculasmodelo . "</p>";
    echo "<p>Marca en mayúsculas: " . $convertirmayusculasmarca . "</p>";

} else {
    echo "<p>Por favor, ingresa una marca y modelo para realizar la búsqueda.</p>";
}
?>