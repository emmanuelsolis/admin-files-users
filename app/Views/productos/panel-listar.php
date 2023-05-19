<?= $header ?>
<h1 style="text-align: center;margin-top: 2%;">Lista de productos</h1>
<style>
    .table {
        width: 60%;
        margin: 3% auto 5% auto;
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
        <td style="display: flex;">
            <img style="margin: auto;" 
            src="<?=base_url()?>/uploads/<?=$producto['prod_image']?>"  
            class="img-thumbnail" width="100px" alt="<?=$producto['prod_name']?>">
        </td>
        <td><?=$producto['prod_name'];?></td>
        <td><?=$producto['fk_id_category'];?></td>
        <td><?=$producto['prod_description'];?></td>
        <td><a href="<?= base_url('editar/'.$producto['id_producto'])?>" type="submit" class="btn btn-info">Editar</a></td>
        <td><a href="<?= base_url('borrar/'.$producto['id_producto'])?>" type="submit" class="btn btn-danger">Borrar</a></td>
      </tr>
        <?php  endforeach ?>
        <tr>
            <td colspan="7"><a class="btn btn-success" href="<?= base_url('/crear-producto') ?>">Crear nuevo producto</a></td>
        </tr>
    </tbody>
  </table>



<?= $footer ?>