<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include("config.php");
    $idPersona=$__POST['idPersona'];
    $sql="DELETE FROM persona WHERE idPersona='$idPersona'"
    if($mysqli->query($sql))
    (
     header("Location:leer.php");     
    )
    else
    (
     echo "Error Interno"
    )
    ?>
        
</body>
</html>