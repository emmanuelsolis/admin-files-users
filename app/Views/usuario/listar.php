<?= $header ?>
<style>
    .table {
        width: 60%;
        margin: 5% auto;
    }
    .footer{
      background-color: #8080ff;  
     
    }
</style>
<div class="container-fluid !direction !spacing">
    <table class="table table-bordered">
        <thead class="thead">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">email</th>
                <th scope="col">Contraseña</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $usuario) : ?>
                <tr>
                    <td scope='row'>"<?= $usuario['id']; ?></td>
                    <td><?= $usuario['nombre']; ?></td>
                    <td><?= $usuario['email']; ?></td>
                    <td><?= $usuario['password']; ?></td>
                    <td><a href="<?= base_url('edit/' . $usuario['id']) ?>" class="btn btn-primary">Editar</a> <a href="<?= base_url('eliminar/' . $usuario['id']); ?>" class="btn btn-danger">Eliminar</a></td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="5"><a class="btn btn-primary" href="<?= base_url('crear') ?>">Crear nuevo usuario</a></td>
            </tr>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        </tbody>
    </table>
</div>
<?= $footer ?>