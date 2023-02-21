<?php

$database_host		= 'localhost';
$database_name 		= 'ingeteam';
$database_user 		= 'user_ingeteam';
$database_password 	= 'Ba7$Ry46c2#';

$mysqli = new mysqli($database_host, $database_user, $database_password, $database_name);

 
if ($mysqli->connect_error) {
    die("La conexion falló: " . $mysqli->connect_error);
}

//Si la sesión está iniciada obtiene los datos de la base de datos

if ( isset( $_SESSION['loggedin'] ) and $_SESSION['loggedin'] == true ) {
    $SQL_user_info = "SELECT * FROM users WHERE id = '{$_SESSION['id']}'";
	$RESULT_user_info = $mysqli->query($SQL_user_info);
    $ROW_user_info = mysqli_fetch_array($RESULT_user_info);
}


//Cierre de sesión 
if ( isset ( $_POST['logout'] ) and $_POST['logout'] == '0' ) {
    session_destroy();
    header('Location: index.php?s=0');
    exit;
}

