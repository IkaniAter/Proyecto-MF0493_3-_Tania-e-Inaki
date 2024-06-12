<?php
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mejora = $_POST["mejora"];
    $hacemosbien = $_POST["hacemosbien"];
    echo "Nombre: ".htmlspecialchars($nombre)."<br>";
    echo "Email: ".htmlspecialchars($email)."<br>";
    echo "Mejora: ".htmlspecialchars($mejora)."<br>";
    echo "Hacemos bien: ".htmlspecialchars($hacemosbien)."<br>";
?>