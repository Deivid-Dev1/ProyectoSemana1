<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $nombre = htmlspecialchars($_POST['nombre']);
    $apellido = htmlspecialchars($_POST['apellido']);
    $nacimiento = htmlspecialchars($_POST['nacimiento']);
    $correo = htmlspecialchars($_POST['correo']);
    $telefono = htmlspecialchars($_POST['telefono']);

    
    echo "<h1>Datos Recibidos:</h1>";
    echo "<p><strong>Nombre:</strong> $nombre</p>";
    echo "<p><strong>Apellido:</strong> $apellido</p>";
    echo "<p><strong>Fecha de Nacimiento:</strong> $nacimiento</p>";
    echo "<p><strong>Correo:</strong> $correo</p>";
    echo "<p><strong>Teléfono:</strong> $telefono</p>";
} else {
    echo "<p>No se recibieron datos. Por favor, envía el formulario.</p>";
}
?>