<html>
<body>
<?php
$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="artesanias";
$db_table_name="envios";
$db_connection = mysqli_connect($db_host, $db_user, $db_password);
 
if (!$db_connection) {
 die('No se ha podido conectar a la base de datos');
}


$subs_name = utf8_decode($_POST['nombre']);
$subs_last = utf8_decode($_POST['apellidos']);
$subs_city = utf8_decode($_POST['ciudad']);
$subs_address = utf8_decode($_POST['direccion']);
$subs_email = utf8_decode($_POST['correo']);
$resultado=mysqli_query($db_connection, "SELECT * FROM ".$db_name." WHERE nombre = '".$subs_email."'");
 

 
 $insert_value = 'INSERT INTO `' . $db_name. '`.`'.$db_table_name.'` (`nombre` , `apellidos` , `ciudad`, `direccion`,`correo` ) VALUES ("' . $subs_name . '", "' . $subs_last . '", "' . $subs_city . '", "' . $subs_address . '", "' . $subs_email . '");
 
mysqli_select_db($db_connection,$db_name);
$retry_value = mysqli_query($db_connection,$insert_value);
 
if (!$retry_value) {
   die('Error: ' . mysql_error());
}
 
//header('Location: Success.html');

 
mysqli_close($db_connection);
 
?>

<a href="index.html">REGRESAR </a>
</body>
</html>
