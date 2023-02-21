<?php require 'config/conexion.php'; ?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Aplicación de prueba Ingeteam" />
        <title>Prueba Ingeteam</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="assets/css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <?php include 'partials/nav.php'; ?>

        <!-- Content section-->
        <section class="py-5">
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="form">
      
                            <ul class="tab-group">
                                <li class="tab active"><a href="#signup">Registro</a></li>
                                <li class="tab"><a href="#login">Iniciar sesión</a></li>
                            </ul>
                            
                            <div class="tab-content">
                                <div id="signup">   
                                <h1>Registrate</h1>
                                
                                <form action="guarda-usuario" method="post">
                                
                                    <div class="field-wrap">
                                        <label>Nombre<span class="req">*</span></label>
                                        <input name='name' type="text" required autocomplete="off" />
                                    </div>

                                    <div class="field-wrap">
                                        <label>Email <span class="req">*</span></label>
                                        <input name='mail' type="email"required autocomplete="off"/>
                                    </div>

                                    <div class="field-wrap">
                                        <label>Dirección<span class="req">*</span></label>
                                        <input name='address' type="text" required autocomplete="off" />
                                    </div>
                                    
                                    <div class="field-wrap">
                                        <label>Código postal<span class="req">*</span></label>
                                        <input name='cp_address' type="number" required autocomplete="off" />
                                    </div>

                                    <div class="field-wrap">
                                        <label>Descripción<span class="req">*</span></label>
                                        <textarea name='description' required autocomplete="off"></textarea>
                                    </div>

                                    <div class="field-wrap">
                                        <label>Contraseña<span class="req">*</span></label>
                                        <input  name='password' type="password"required autocomplete="off"/>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">Registrarme</button>
                                
                                </form>

                                </div>
                                
                                <div id="login">   
                                <h1>Iniciar sesión</h1>
                                
                                <form action="inicia-sesion" method="post">
                                    <?php
                                    if ( isset( $_GET['error'] ) ) {
                                        echo"<div class='alert alert-danger' role='alert'>{$_GET['error']}</div>";
                                    }
                                    ?>
                                    <div class="field-wrap">
                                        <label>Email<span class="req">*</span></label>
                                        <input name='mail' type="email"required autocomplete="off"/>
                                    </div>
                                
                                    <div class="field-wrap">
                                        <label>Password<span class="req">*</span></label>
                                        <input name='password' type="password"required autocomplete="off"/>
                                    </div>

                                    <button type='submit' class="btn btn-primary btn-lg btn-block">Iniciar sesión</button>
                                
                                </form>

                                </div>
                                
                            </div><!-- tab-content -->
                            
                        </div> <!-- /form -->
                    </div>
                </div>
            </div>
        </section>
    
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Mi web de prueba 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
        <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
        
        <script src="assets/js/scripts.js"></script>
    </body>
</html>
