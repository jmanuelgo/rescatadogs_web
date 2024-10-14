<?php
session_start();
include("../crud/config.php");

// Validar si el refugio está en la sesión
if (!isset($_SESSION['iduser'])) {
    header("Location: login.php");
    exit();
}

$shelter_id = $_SESSION['iduser']; // Obtener el ID del refugio de la sesión
$name = $_POST['name'];
$breed = $_POST['breed'];
$age = $_POST['age'];
$description = $_POST['description'];

// Procesar la subida de la imagen
$target_dir = __DIR__ . "/uploads/"; // Ruta absoluta al directorio "uploads/"
$image = $_FILES['image']['name'];
$target_file = $target_dir . basename($image);
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Comprobar si la imagen fue recibida
if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
    echo "Imagen recibida: " . $_FILES['image']['name'];
} else {
    die("Error en la subida: " . $_FILES['image']['error']);
}

// Validar el tipo de imagen
$check = getimagesize($_FILES['image']['tmp_name']);
if($check === false) {
    die("El archivo no es una imagen válida.");
}


// Insertar los datos en la base de datos
$adoption_status = 'available';  // Valor por defecto o inicial
$sql = "INSERT INTO dogs (shelter_id, name, breed, age, description, image_url, adoption_status) 
        VALUES ('$shelter_id', '$name', '$breed', '$age', '$description', '$target_file', '$adoption_status')";


if ($mysqli->query($sql) === TRUE) {
    echo "Mascota registrada exitosamente.";
    // Redirigir a la página de inicio
    header("Location: inicio.php");
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();
?>
