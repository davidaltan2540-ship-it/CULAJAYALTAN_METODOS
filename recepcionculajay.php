<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $names     = htmlspecialchars(trim($_POST["nombres"]));
    $lastnames = htmlspecialchars(trim($_POST["apellidos"]));
    $suedad    = htmlspecialchars(trim($_POST["edad"]));
    $suemail   = htmlspecialchars(trim($_POST["correo"]));
    $tel       = htmlspecialchars(trim($_POST["telefono"]));

    if (empty($names) || empty($lastnames) || empty($suedad) || empty($suemail) || empty($tel)) {
        echo "Por favor, complete todos los campos.";
        exit;
    }

    // Si llegó aquí, todos los campos tienen datos
    $letrasnames          = strlen($names);
    $letraslastnames      = strlen($lastnames);
    $letrassuemail        = strlen($suemail);
    $letrasnamesMayus     = strtoupper($names);
    $letraslastnamesMayus = strtoupper($lastnames);
    $letrassuemailMayus   = strtoupper($suemail);
    $suedadInvertida      = strrev($suedad);
    $telInvertida         = strrev($tel);

    echo "<h2>Información Procesada:</h2>";
    echo "<p>Nombres: $names (Longitud: $letrasnames, Mayúsculas: $letrasnamesMayus)</p>";
    echo "<p>Apellidos: $lastnames (Longitud: $letraslastnames, Mayúsculas: $letraslastnamesMayus)</p>";
    echo "<p>Edad: $suedad (Invertida: $suedadInvertida)</p>";
    echo "<p>Correo: $suemail (Longitud: $letrassuemail, Mayúsculas: $letrassuemailMayus)</p>";
    echo "<p>Teléfono: $tel (Invertida: $telInvertida)</p>";
    echo "<p>¡Gracias por registrarte, $names $lastnames! Hemos recibido tu información.</p>";

} else {
    echo "Método de solicitud no válido.";
}
?>