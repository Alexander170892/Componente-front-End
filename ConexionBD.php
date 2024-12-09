<?php

include('ConBD.php');

if(isset($_POST['insertar'])){

$Cedula = $_POST['Cedula'];
$Nombres = $_POST['Nombres'];
$P_Apellido = $_POST['P_Apellido'];
$S_Apellido = $_POST['S_Apellido'];
$Email = $_POST['Email'];
$Direccion = $_POST['Direccion'];
$Ciudad = $_POST['Ciudad'];
$Telefono = $_POST['Telefono'];

insertar($Cedula,$Nombres,$P_Apellido,$S_Apellido,$Email,$Direccion,$Ciudad,$Telefono,$conexion);

}

function insertar($Cedula,$Nombres,$P_Apellido,$S_Apellido,$Email,$Direccion,$Ciudad,$Telefono,$conexion){

$sql = "INSERT INTO `registro` (`Cedula`,`Nombres`,`P_Apellido`,`S_Nombre`,`Email`,`Direccion`,`Ciudad`,`Telefono`) VALUES ('$Cedula','$Nombres','$P_Apellido','$S_Apellido','$Email','$Direccion','$Ciudad','$Telefono')";
return $conexion->prepare($sql)->execute();

}



?>