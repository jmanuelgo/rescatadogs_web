<?php
include("config.php");

$nombre=$_POST['nombre'];
$edad=$_POST['edad'];

$sql="INSERT INTO persona VALUES (NULL,'$nombre','$edad');";
//$execonsulta=$mysqli->query($sql);puede ser de est forma o de la siguinet forma
if($mysqli->query($sql))
{
    //echo "Se regidtro correctamente";
    header("Location: leer.php");
}
else
{
    echo "Error de registro";
}
?>
<a href="leer.php">VOLVER A LA LISTA</a>