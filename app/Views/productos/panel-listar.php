<?= $header ?>
<h1>Lista de productos</h1>
<style>
    .table {
        width: 60%;
        margin: 5% auto;
    }

    .footer {
        background-color: #8080ff;
    }
</style>
  <table class="table table-bordered table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Imagen</th>
        <th scope="col">Nombre</th>
        <th scope="col">Categoria</th>
        <th scope="col">Descripcion</th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
        <?php foreach($productos as $producto) :?>
      <tr>
        <td><?=$producto['id_producto'];?></td>
        <td><?=$producto['prod_image'];?></td>
        <td><?=$producto['prod_name'];?></td>
        <td><?=$producto['fk_id_category'];?></td>
        <td><?=$producto['prod_description'];?></td>
        <td>Editar</td>
        <td><a href="<?= base_url('borrar/'.$producto['id_producto'])?>" type="submit" class="btn btn-danger">Borrar</a></td>
      </tr>
        <?php  endforeach ?>
        <tr>
            <td colspan="7"><a class="btn btn-primary" href="<?= base_url('/crear-producto') ?>">Crear nuevo producto</a></td>
        </tr>
    </tbody>
  </table>



<?= $footer ?>