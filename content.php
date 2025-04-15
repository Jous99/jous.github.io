<?php
// Leer contenido desde un archivo en lugar de usar una base de datos
$filename = "data.txt";

if (file_exists($filename)) {
    $content = file_get_contents($filename);
    echo nl2br(htmlspecialchars($content));
} else {
    echo "No hay contenido disponible.";
}
?>