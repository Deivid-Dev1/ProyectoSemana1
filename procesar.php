<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];

    
    if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] == UPLOAD_ERR_OK) {
        $directorioDestino = "/uploads"; // Carpeta donde se guardarán las imágenes
        if (!is_dir($directorioDestino)) {
            mkdir($directorioDestino, 0777, true); 
        }
        $nombreArchivo = basename($_FILES['imagen']['name']);
        $rutaCompleta = $directorioDestino . $nombreArchivo;

        /
        if (move_uploaded_file($_FILES['imagen']['tmp_name'], $rutaCompleta)) {
            echo "Imagen subida correctamente.";
        } else {
            echo "Error al subir la imagen.";
        }
    } else {
        echo "No se ha subido ninguna imagen o hubo un error.";
    }

    
}
?>