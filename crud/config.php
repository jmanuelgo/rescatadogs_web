<?php
$hostname="localhost";
$usuario= "root";
$password= "manuelojalvo653+";
$basededatos= "rescatadogs";

$mysqli=new mysqli($hostname,$usuario,$password,$basededatos);

if ($mysqli->connect_error) 
{
    die("". $mysqli->connect_error);
}
?>