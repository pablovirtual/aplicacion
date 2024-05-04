<?=$cabecera?>
<a class="btn btn-success" href="<?=base_url('crear') ?>">Crear usuario</a>
<br><br>
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>usuario</th>
                    <th>nombre</th>
                    <th>correo</th>
                    <th>password</th>
                    <th>acciones</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach($usuarios as $usuario): ?>
                <tr>
                    <td>ID</td>
                    <td><?=$usuario ['usuario'];?></td>
                    <td><?=$usuario ['nombre'];?></td>
                    <td><?=$usuario ['correo'];?></td>
                    <td><?=$usuario ['password'];?></td>
                    <td>
                        <a href="<?=base_url('editar/'.$usuario['usuario'])?>" class="btn btn-info" type="button">editar</a>
                        /
                        <a href="<?=base_url('eliminar/'.$usuario['usuario'])?>" class="btn btn-danger"  type="button">eliminar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?=$pie?>
