<?= $header ?>
<h1>Este es mi formulario de creacion de productos</h1>
<style>
   
    .footer {
        background-color: #8080ff;
    }

    .prod_panle_container {
        width: 40%;
        margin: 5% auto;
        border: #8080ff 1px solid;
        padding: 2%;
        border-radius: 5px;
        background-color: #eeeeee;
    }
</style>
<div class="prod_panle_container">
    <form action="<?=site_url('productos/guardar')?>" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="nombre">Nombre del producto:</label>
        <input type="text" class="form-control" id="prod_name" placeholder="Ingrese el nombre del producto" name="prod_name">
      </div>
        <div class="form-group">
            <label for="descripcion">Descripcion del producto:</label>
            <input type="text" class="form-control" id="prod_description" placeholder="Ingrese la descripcion del producto" name="prod_description">
        </div>
        <div class="form-group">
            <label for="categoria">Categoria del producto:</label>
            <input type="number" class="form-control" id="fk_id_category" placeholder="Ingrese la categoria del producto" name="fk_id_category">
        </div>
      <div class="form-file form-file-lg mb-3">
        <input type="file" class="form-file-input" id="prod_image" name="prod_image">
        <label class="form-file-label" for="imagen">
          <span class="form-file-text" >Choose file...</span>
          <span class="form-file-button">Browse</span>
        </label>
      </div>
      <button type="submit" class="btn btn-success">Guardar</button>
    </form>
</div>
<?= $footer ?>