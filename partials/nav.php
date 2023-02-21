<!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">Ingeteam</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <?php
                if ( isset( $_SESSION['loggedin'] ) and $_SESSION['loggedin'] == true ) {
                    echo"<li class='nav-item'><a class='nav-link' href='mis-datos'>Mis datos</a></li>
                        <li class='nav-item'><a class='nav-link' href='mis-tareas'>Mis tareas</a></li>
                        <li class='nav-item'> <a class='nav-link' href='index.php?logout=1'> | Cerrar sesión</a></li>";
                }
                ?>
            </ul>
        </div>
    </div>
</nav>