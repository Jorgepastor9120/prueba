<div class="col-lg-6">
    <div class="form">
        <div id="signup">   
            <h1>Mis datos</h1>
            
            <form action="actualiza-usuario" method="post">
                <?php
                if ( isset( $_GET['error'] ) and $_GET['error'] == 1 ) {
                    echo"<div class='alert alert-danger' role='alert'>Datos de usuario erroneos</div>";
                }
                if ( isset( $_GET['error'] ) and $_GET['error'] == 2 ) {
                    echo"<div class='alert alert-danger' role='alert'>Email ya registrado</div>";
                }
                ?>
                <div class="form-group">
                    <label class='active highlight'>Nombre<span class="req">*</span></label>
                    <input name='name' type="text" value='<?php echo $ROW_user_info['name']; ?>' required  />
                </div>

                <div class="form-group">
                    <label class='active highlight'>Email <span class="req">*</span></label>
                    <input name='mail' type="email" value='<?php echo $ROW_user_info['mail']; ?>' required autocomplete="off"/>
                </div>

                <div class="form-group">
                    <label class='active highlight'>Dirección<span class="req">*</span></label>
                    <input name='address' type="text" value='<?php echo $ROW_user_info['address']; ?>' required autocomplete="off" />
                </div>
                
                <div class="form-group">
                    <label class='active highlight'>Código postal<span class="req">*</span></label>
                    <input name='cp_address' type="number" value='<?php echo $ROW_user_info['cp_address']; ?>' required autocomplete="off" />
                </div>

                <div class="form-group">
                    <label class='active highlight'>Descripción<span class="req">*</span></label>
                    <textarea name='description' required autocomplete="off"><?php echo $ROW_user_info['description']; ?></textarea>
                </div>

                <div class="form-group">
                    <label class='active highlight'>Contraseña</label>
                    <input  name='password' type="password" autocomplete="off"/>
                    <small class='text-muted'>Dejar en blanco para NO modificar</small>
                </div>
                
                <button type="submit" class="btn btn-primary btn-lg btn-block">Actualizar</button>
            
            </form>

        </div>
    </div>
</div>