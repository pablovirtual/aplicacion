<?=$cabecera;?>
    
    <h1>Editar usuario</h1>

    <form action="<?=base_url('actualizar')?>" method="post">
        <div class="form-group">
            <label for="usuario">Usuario</label>
            <input type="hidden" name="usuario" id="usuario" class="form-control" value="<?=$usuario['usuario'];?>">
        </div>
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="<?=$usuario['nombre'];?>">
        </div>
        <div class="form-group">
            <label for="correo">Correo</label>
            <input type="email" name="correo" id="correo" class="form-control" value="<?=$usuario['correo'];?>">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" value="<?=$usuario['password'];?>">
        </div>
        <br>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
        <input type="hidden" name="usuarioNombre" value="<?=$usuario['usuario'];?>">
    
<?=$pie;?>