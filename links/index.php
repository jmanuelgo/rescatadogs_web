<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../bootstrap/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
    <style>
      /* Fondo con imagen */
.background-image {
    background-image: url('tu-imagen-de-fondo.jpg'); /* Cambia 'tu-imagen-de-fondo.jpg' por la ruta de tu imagen */
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

.btn-login {
    background-color: #9B5100;
    border-color: #9B5100;
}

.btn-login:hover {
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
                <h2 class="mb-4">Rescatadogs</h2>
                <p class="text-muted">Inicio de sesión para refugios</p>
                <form name="formulario" action="validar.php" method="post">
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" name="name" placeholder="Username">
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary w-100 mb-3 btn-login">Iniciar sesión</button>
                    <p><a href="registro.php" class="text-danger">Crear cuenta de refugio</a></p>
                </form>
            </div>
            <!-- Lado derecho -->
            <div class="col-lg-6 p-5 d-flex flex-column justify-content-center align-items-center text-center info-container">
                <h2>Adopta no compres</h2>
                <p>Coloca algo triste y cursi para que los usuarios adopten.</p>
            </div>
        </div>
    </div>

<script src="../bootstrap/assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>