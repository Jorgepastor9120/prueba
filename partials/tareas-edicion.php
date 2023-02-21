<div class="col-lg-6">
    <div class="form">
        <h1>Editar tarea</h1>
            
        <form action="edita-tarea" method="post">
            <input hidden name='id' value='<?php echo $_GET['id_tarea']; ?>'>
            <div class='form-group'>
                <label>Nombre*</label>
                <input type='text' name='name' required autocomplete="off" value='<?php echo $ROW_user_task['name']; ?>' />
            </div>
            <div class='form-group'>
                <label>Descripción</label>
                <textarea name='description' autocomplete="off"><?php echo $ROW_user_task['description']; ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</div>