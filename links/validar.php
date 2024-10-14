<?php
session_start();
include("../crud/config.php");
$name=$_POST['name'];
$password=md5($_POST['password']);
$sql="SELECT * FROM shelters WHERE name='$name'";
$execonsulta=$mysqli->query($sql);
if(mysqli_num_rows($execonsulta)>0)
{
    while($row=mysqli_fetch_array($execonsulta))
    {
        if($password==$row['password']){
            $_SESSION['name']=$row['name'];
            $_SESSION['iduser']=$row['id'];
            header("Location:inicio.php");
        }
        else{
            echo"password invalida";

        }
    }

}
else{
    echo"usuario no identificado";

}
?>