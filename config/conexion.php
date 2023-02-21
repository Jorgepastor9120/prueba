<?php

$database_host		= 'localhost';
$database_name 		= 'ingeteam';
$database_user 		= 'user_ingeteam';
$database_password 	= 'Ba7$Ry46c2#';

$mysqli = new mysqli($database_host, $database_user, $database_password, $database_name);

 
if ($mysqli->connect_error) {
    die("La conexion falló: " . $mysqli->connect_error);
}

session_start();

//Si la sesión está iniciada obtiene los datos de la base de datos

if ( isset( $_SESSION['loggedin'] ) and $_SESSION['loggedin'] == true ) {
    $SQL_user_info = "SELECT * FROM users WHERE id = '{$_SESSION['id']}'";
	$RESULT_user_info = $mysqli->query($SQL_user_info);
    $ROW_user_info = mysqli_fetch_array($RESULT_user_info);

    $SQL_user_tasks = "SELECT * FROM tasks WHERE user_id = '{$_SESSION['id']}' ORDER BY id DESC";
	$RESULT_user_tasks = $mysqli->query($SQL_user_tasks);
    $num_user_tasks = $RESULT_user_tasks->num_rows;

    if( isset( $_GET['id_tarea'] ) ) {
        $SQL_user_task = "SELECT * FROM tasks WHERE id = '{$_GET['id_tarea']}' AND user_id = '{$_SESSION['id']}'";
	    $RESULT_user_task = $mysqli->query($SQL_user_task);
        $ROW_user_task = mysqli_fetch_array($RESULT_user_task);
    }
}


//Cierre de sesión 
if ( isset ( $_GET['logout'] ) and $_GET['logout'] == '1' ) {
    session_destroy();
    header('Location: index.php');
    exit;
}

