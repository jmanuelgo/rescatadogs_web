<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Registro Mascota</title>
</head>
<body>
    <?php include("header.php") ?>
    <form id="registroMascotaForm" action="registrarm.php" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="name" class="form-label">Nombre de la mascota</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="mb-3">
        <label for="breed" class="form-label">Raza</label>
        <input type="text" class="form-control" id="breed" name="breed" required>
    </div>
    <div class="mb-3">
        <label for="age" class="form-label">Edad</label>
        <input type="number" class="form-control" id="age" name="age" required>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descripción</label>
        <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Imagen de la mascota</label>
        <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
    </div>
    <button type="submit" class="btn btn-primary">Registrar Mascota</button>
</form>



</body>
</html>