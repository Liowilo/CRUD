<?php

require_once "conexion.php";
$conexion=conexion();
$n=$_POST['nombre'];
$m=$_POST['area'];
$o=$_POST['sexo'];
$p=$_POST['correo'];

$sql="INSERT INTO Registros(nombre,area,sexo,correo)
values('$n','$m','$o','$p')";
echo $result=mysqli_query($conexion,$sql);

?>