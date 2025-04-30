<?php
include 'D:\Taller de Proyectos 1\Sistema-de-bolsa-de-empleo\BD\conexion.php'; // Reemplaza con la ruta correcta

$conn = Conexion::conectar();

if ($conn) {
    echo "Conectado exitosamente a la base de datos.";
} else {
    echo "Error al conectar a la base de datos.";
}
?>