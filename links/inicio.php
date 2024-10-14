<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rescatadogs - Refugios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    
</head>
<body>
    <!-- Header Dinámico -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Rescatadogs</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="inicio.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="registrar_mascota.php">Registrar Mascota</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="crear_eventos.php">Crear Eventos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="solicitudes.php">Solicitudes de Adopción</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="logout.php">Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!-- Página de Inicio -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <h1 class="mb-4">¡Bienvenido a Rescatadogs!</h1>
                <p class="lead">Conéctate con refugios locales, ayuda a los animales a encontrar un hogar, y sé parte del cambio.</p>
                <hr>
                <h3>¿Qué puedes hacer aquí?</h3>
                <ul>
                    <li>Registrar mascotas para adopción.</li>
                    <li>Promocionar eventos de adopción.</li>
                    <li>Gestionar solicitudes de adopción recibidas.</li>
                    <li>Unirte a una comunidad de personas dedicadas a mejorar la vida de las mascotas sin hogar.</li>
                </ul>
            </div>
            <div class="col-md-4">
                <h3 class="mb-3">Estadísticas</h3>
                <ul class="list-group">
                    <li class="list-group-item">Mascotas en adopción: <span class="badge bg-primary">120</span></li>
                    <li class="list-group-item">Refugios registrados: <span class="badge bg-success">35</span></li>
                    <li class="list-group-item">Adopciones exitosas: <span class="badge bg-warning">200</span></li>
                </ul>
            </div>
        </div>
        
        <!-- Carrusel de Historias de Adopción -->
        <div id="adopcionesExitosas" class="carousel slide mt-5" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="historia1.jpg" class="d-block w-100" alt="Historia de Adopción 1">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Max encontró un hogar amoroso</h5>
                        <p>Gracias a Rescatadogs, Max ahora vive feliz con su nueva familia.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="historia2.jpg" class="d-block w-100" alt="Historia de Adopción 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Luna y su nueva vida</h5>
                        <p>Después de meses en un refugio, Luna fue adoptada por una pareja maravillosa.</p>
                    </div>
                </div>
                <!-- Añade más historias aquí -->
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#adopcionesExitosas" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#adopcionesExitosas" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Call to Action -->
        <div class="text-center mt-5">
            <h3>¿Quieres ayudar?</h3>
            <p>Colabora con los refugios locales y haz una diferencia. ¡Adopta, no compres!</p>
            <a href="colaborar.php" class="btn btn-warning">Colaborar</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
