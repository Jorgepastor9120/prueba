<?php require 'config/conexion.php'; ?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Aplicación de prueba Ingeteam" />
        <title>Mi cuenta - Ingeteam</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
        <link href="assets/css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <?php include 'partials/nav.php'; ?>

        <!-- Content section-->
        <section class="py-5">
            <div class="container my-5">
                <div class="row justify-content-center">
                    <?php
                    if ( !isset( $_GET['action'] ) || $_GET['action'] == 'cuenta' ) {
                        include 'partials/datos-cuenta.php';
                    }
                    if ( isset( $_GET['action'] ) and $_GET['action'] == 'tareas' ) {
                        include 'partials/tareas-cuenta.php';
                    }
                    ?>
                </div>
            </div>
        </section>
    
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Mi web de prueba 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
        
        <script src="assets/js/scripts.js"></script>
    </body>
</html>
