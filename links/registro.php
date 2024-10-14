<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Rescatadogs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <style>
/* Fondo con imagen */
.background-image {
    background-image: url('../img/logo.jpeg'); /* Cambia 'tu-imagen-de-fondo.jpg' por la ruta de tu imagen */
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

body {
    background-color: #F0F8FF; /* Color de respaldo en caso de que la imagen no cargue */
}

.form-container {
    background-color: rgba(255, 202, 44, 0.9); /* Color de fondo semi-transparente */
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.info-container {
    background: linear-gradient(to right, #9B5100, #7C370E);
    color: white;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.btn-register {
    background-color: #9B5100;
    border-color: #9B5100;
}

.btn-register:hover {
    background-color: #7C370E;
    border-color: #7C370E;
}

a {
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

/* Logo */
.logo img {
    max-width: 100%;
    height: auto;
}

    </style>
</head>
<body>
    <div class="container-fluid min-vh-100 d-flex align-items-center justify-content-center background-image">
        <div class="row w-75">
            <!-- Lado izquierdo -->
            <div class="col-lg-6 p-5 text-center form-container">
                <!-- Espacio para el logo -->
                <div class="logo mb-4">
                    <img src="../img/logo.jpeg" alt="Logo Rescatadogs" width="100">
                </div>
                <h2 class="mb-4">Registro de Refugio</h2>
                <p class="text-muted">Completa el formulario para registrarte</p>
                <form action="registraru.php" method="POST">
    <div class="form-group mb-3">
        <input type="text" class="form-control" name="name" id="name" placeholder="Nombre completo" required>
    </div>
    <div class="form-group mb-3">
        <input type="text" class="form-control" name="location" id="location" placeholder="Ubicación" required>
    </div>
    <div class="form-group mb-3">
        <input type="tel" class="form-control" name="phone" id="phone" placeholder="Número de teléfono" required>
    </div>
    <div class="form-group mb-3">
        <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
    </div>
    <div class="form-group mb-3">
        <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña" required>
    </div>
    <button type="submit" class="btn btn-primary w-100 mb-3 btn-register">Registrarse</button>
</form>

            </div>
            <!-- Lado derecho -->
            <div class="col-lg-6 p-5 d-flex flex-column justify-content-center align-items-center text-center info-container">
                <h2>Únete a Rescatadogs</h2>
                <p>Ayuda a cambiar vidas adoptando o colaborando en refugios.</p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
