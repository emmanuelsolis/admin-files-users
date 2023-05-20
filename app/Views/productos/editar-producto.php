<?= $header ?>
<style>
    h1 {
        text-align: center;
        margin-top: 1%;
    }

    .footer {
        background-color: #8080ff;
    }

    .prod_panel_container {
        width: 30%;
        margin: 2% auto;
        border: #8080ff 1px solid;
        padding: 2%;
        border-radius: 5px;
        background-color: #eeeeee;
    }
</style>

<h1>Editar Producto</h1>
<div class="prod_panel_container">
    <form action="<?= site_url('actualizar-producto') ?>" method="post" enctype="multipart/form-data">
        <div class="title">
            <input type="hidden"name="id_producto" value="<?=$producto['id_producto']?>">
        </div>
        <div class="form-group">
            <label for="nombre">Nombre del producto:</label>
            <input type="text" class="form-control" id="prod_name" value="<?= $producto['prod_name'] ?>" name="prod_name">
        </div>
        <div class="form-group">
            <label for="descripcion">Descripcion del producto:</label>
            <input type="text" class="form-control" id="prod_description" value="<?= $producto['prod_description'] ?>" name="prod_description">
        </div>
        <div class="form-group">
            <label for="categoria">Categoria del producto:</label>
            <input type="number" class="form-control" id="fk_id_category" value="<?= $producto['fk_id_category'] ?>" name="fk_id_category" />
            <div class="form-file form-file-lg mb-3">
                <img style="margin: 10px;" src="<?= base_url() ?>/uploads/<?= $producto['prod_image'] ?>" class="img-fluid" alt="<?= $producto['prod_name'] ?>">
                <input type="file" class="form-file-input" id="prod_image" name="prod_image">
                <label class="form-file-label" for="imagen">
                    <span class="form-file-text">Choose file...</span>
                    <span class="form-file-button">Browse</span>
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Actualizar Datos</button>
    </form>
</div>


<?= $footer ?>