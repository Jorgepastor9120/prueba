<?php

if( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
		
	include "../config/conexion.php";
		
	if( $_GET['action'] == 'nuevo_usuario' ) {

        //Se comprueba el formato de los datos excepto descripcion
        if(
            !preg_match( "/^[a-zA-Z\s]+$/", $_POST['name'] ) ||
            !filter_var( $_POST['mail'], FILTER_VALIDATE_EMAIL ) ||
            !preg_match( "/^[a-zA-Z0-9\s]+$/", $_POST['address'] ) ||
            !preg_match( '/^[0-9]{5}+$/', $_POST['cp_address'] )
        ) {
            header( "Location: index.php?error=Datos de registro erroneos" );
            exit;
        }

        //Comprueba si mail existe 
        $SQL_user = "SELECT mail FROM users WHERE mail = '{$_POST['mail']}'";
		$RESULT_user = $mysqli->query($SQL_user);

        if ( mysqli_num_rows($RESULT_user) > 0 ) {
            header( "Location: index.php?error=mail ya registrado" );
            exit;
        }
        
        $description = trim( strip_tags( $_POST['description'] ) );

        $SHA_pssword = hash( 'sha512', $_POST['password'] ); //Encriptación de contraseña

        $date = date("Y-m-d");

        $mysqli->query(
			"INSERT INTO users (name,mail,description,address,cp_address,password,date_add,date_upd) VALUES ('{$_POST['name']}','{$_POST['mail']}','$description','{$_POST['address']}','{$_POST['cp_address']}','$SHA_pssword','$date','$date')"
		);

        $SQL_user_id = "SELECT id FROM users WHERE mail = '{$_POST['mail']}'";
		$RESULT_user_id = $mysqli->query($SQL_user_id);
        $ROW_user_id = mysqli_fetch_array($RESULT_user_id);

		session_start();

		$_SESSION['id'] = $ROW_user_id['id'];
		$_SESSION['loggedin'] = true;
			
		header( "Location: mi-cuenta" );

    }

    if( $_GET['action'] == 'inicia_sesion' ) {

        //Se comprueba el formato de los datos excepto descripcion
        if( !filter_var( $_POST['mail'], FILTER_VALIDATE_EMAIL ) ) {
            header( "Location: index.php?error=Datos de registro erroneos" );
            exit;
        }

        $SHA_pssword = hash( 'sha512', $_POST['password'] );

        $SQL_user_id = "SELECT id FROM users WHERE mail = '{$_POST['mail']}' AND password = '$SHA_pssword'";
		$RESULT_user_id = $mysqli->query($SQL_user_id);
        $ROW_user_id = mysqli_fetch_array($RESULT_user_id);

        if ( mysqli_num_rows($RESULT_user_id) == 0 ) {
            header( "Location: index.php?error=Los datos son erroneos o el usuario no existe." );
            exit;
        }

        session_start();

		$_SESSION['id'] = $ROW_user_id['id'];
		$_SESSION['loggedin'] = true;
			
		header( "Location: mi-cuenta" );

    }

    if( $_GET['action'] == 'actualiza_usuario' ) {

        //Se comprueba el formato de los datos excepto descripcion
        if(
            !preg_match( "/^[a-zA-Z\s]+$/", $_POST['name'] ) ||
            !filter_var( $_POST['mail'], FILTER_VALIDATE_EMAIL ) ||
            !preg_match( "/^[a-zA-Z0-9\s]+$/", $_POST['address'] ) ||
            !preg_match( '/^[0-9]{5}+$/', $_POST['cp_address'] )
        ) {
            header( "Location: mis-datos-1" );
            exit;
        }

        //Comprueba si mail existe 
        $SQL_user = "SELECT mail FROM users WHERE mail = '{$_POST['mail']}' AND id != '{$_SESSION['id']}'";
		$RESULT_user = $mysqli->query($SQL_user);

        if ( mysqli_num_rows($RESULT_user) > 0 ) {
            header( "Location: mis-datos-2" );
            exit;
        }

        $description = trim( strip_tags( $_POST['description'] ) );

        $date = date("Y-m-d");

        $mysqli->query(
			"UPDATE users SET name = '{$_POST['name']}',mail = '{$_POST['mail']}',description = '$description',address = '{$_POST['address']}',cp_address = '{$_POST['cp_address']}',date_upd = '$date' WHERE id = '{$_SESSION['id']}'"
		);

        if( !empty( $_POST['password'] ) ) {
            $SHA_pssword = hash( 'sha512', $_POST['password'] );

            $mysqli->query(
                "UPDATE users SET password = '$SHA_pssword' WHERE id = '{$_SESSION['id']}'"
            );
        }

        header( "Location: mis-datos" );

    }

}
