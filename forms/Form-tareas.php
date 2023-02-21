<?php

if( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
		
	include "../config/conexion.php";
		
	if( $_GET['action'] == 'nueva_tarea' ) {

        $name = trim( strip_tags( $_POST['name'] ) );
        $description = trim( strip_tags( $_POST['description'] ) );

        $date = date("Y-m-d");

        $mysqli->query(
            "INSERT INTO tasks (user_id,name,description,fecha_add) VALUES ('{$_SESSION['id']}','$name','$description','$date')"
        );

        header( "Location: mis-tareas" );

    }

    if( $_GET['action'] == 'edita_tarea' ) {

        $name = trim( strip_tags( $_POST['name'] ) );
        $description = trim( strip_tags( $_POST['description'] ) );

        $mysqli->query(
            "UPDATE tasks SET name = '$name', description = '$description' WHERE id = '{$_POST['id']}' AND user_id = '{$_SESSION['id']}'"
        );

        header( "Location: mis-tareas" );

    }

}

if( $_SERVER['REQUEST_METHOD'] == 'GET' ) {
		
	include "../config/conexion.php";

    if( $_GET['action'] == 'elimina_tarea' ) {

        $mysqli->query(
            "DELETE FROM tasks WHERE id = '{$_GET['id']}' AND user_id = '{$_SESSION['id']}'"
        );

        header( "Location: mis-tareas" );

    }

}