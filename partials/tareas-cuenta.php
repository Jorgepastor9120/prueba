<div class="col-lg-6">
    <h2><?php echo $num_user_tasks; ?> tareas registradas <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#NuevaTarea">Nueva tarea</button></h2>
    <hr>

    <?php
    if( $num_user_tasks > 0 ) {
        echo"
        <table class='table table-striped'>
            <thead>
                <tr>
                <th scope='col'>#</th>
                <th scope='col'>Nombre</th>
                <th scope='col'>Descripción</th>
                <th scope='col'>Fecha</th>
                <th scope='col'>Acciones</th>
                </tr>
            </thead>
            <tbody>";
                
                foreach( $RESULT_user_tasks as $ROW_user_tasks ) {

                    $fecha_add = date_format( date_create( $ROW_user_tasks['fecha_add'] ), 'd/m/Y');

                    echo"
                    <tr>
                        <th scope='row'>{$ROW_user_tasks['id']}</th>
                        <td>{$ROW_user_tasks['name']}</td>
                        <td>{$ROW_user_tasks['description']}</td>
                        <td>$fecha_add</td>
                        <td>
                        <div class='dropdown'>
                            <button class='btn btn-success btn-xs dropdown-toggle' type='button' data-toggle='dropdown'>Acciones
                            <span class='caret'></span></button>
                            <ul class='dropdown-menu'>
                                <li><a class='p-1' href='edita-tarea-{$ROW_user_tasks['id']}'><i class='fa-sharp fa-solid fa-pencil'></i> Editar</a></li>
                                <li class='divider'></li>
                                <li><a class='p-1' href='elimina-tarea-{$ROW_user_tasks['id']}'><i class='fa-sharp fa-solid fa-trash'></i> Borrar</a></li>
                            </ul>
                        </div>
                        </td>
                    </tr>";
                }
        
            echo" 
            </tbody>
        </table>";
    } else {
        echo"<p>No hay tareas registradas</p>";
    }
    ?>
    
</div>


<div class="modal fade" id="NuevaTarea" tabindex="-1" role="dialog" aria-labelledby="NuevaTareaLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="NuevaTareaLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <form action="nueva-tarea" method="post">
        <div class="modal-body">
            <div class='form-group'>
                <label>Nombre*</label>
                <input type='text' name='name' required autocomplete="off" />
            </div>
            <div class='form-group'>
                <label>Descripción</label>
                <textarea name='description' autocomplete="off"></textarea>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>
    </div>
</div>
</div>