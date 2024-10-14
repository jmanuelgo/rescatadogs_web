<?php
session_start();
include("../crud/config.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recoger los datos del formulario
    $name = $_POST['name'];
    $location = $_POST['location'];
    $contact_info = $_POST['phone']; // Utilizamos contact_info para el número de teléfono
    $email = $_POST['email'];
    $password = md5($_POST['password']); // Encriptar la contraseña (mejor utilizar password_hash por seguridad)

    // Verificar que no existan campos vacíos
    if (!empty($name) && !empty($location) && !empty($contact_info) && !empty($email) && !empty($password)) {
        // Comprobar si el usuario ya existe
        $sql_check = "SELECT * FROM shelters WHERE email='$email' OR name='$name'";
        $result_check = $mysqli->query($sql_check);
        
        if (mysqli_num_rows($result_check) > 0) {
            echo "El usuario o email ya están registrados.";
        } else {
            // Preparar la consulta para insertar el nuevo usuario
            $sql = "INSERT INTO shelters (name, location, contact_info, email, password) VALUES (?, ?, ?, ?, ?)";
            
            // Usar prepared statements para evitar inyecciones SQL
            if ($stmt = $mysqli->prepare($sql)) {
                $stmt->bind_param("sssss", $name, $location, $contact_info, $email, $password);

                // Ejecutar la consulta
                if ($stmt->execute()) {
                    echo "Usuario registrado con éxito.";
                    // Redirigir al inicio de sesión o alguna otra página
                    header("Location: login.php");
                } else {
                    echo "Error al registrar el usuario: " . $stmt->error;
                }

                // Cerrar el statement
                $stmt->close();
            }
        }
    } else {
        echo "Por favor, completa todos los campos.";
    }
}

// Cerrar la conexión
$mysqli->close();
?>
