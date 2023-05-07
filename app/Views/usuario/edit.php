<?= $header ?>
<style>
  .card {
    margin: auto;
    height: auto;
    margin-bottom: 5%;
    background: #ccc !important;
  }
  col-md-12 {
    width: 100%;
  }
</style>
<h1 class="col-md-6 mx-auto">Actualizar Datos</h1><br><br>

<div class="card" style="width:18rem;">
  <div class="card-body">
    <h5 class="card-title">Actualizar Datos</h5>
    <form class="row g-3 col-md-12 mx-auto" method="POST" action="<?= site_url('/actualizar') ?>">
      <input type="hidden" name="id" value="<?php echo $usuario['id']; ?>">
      <div class="col-md-12">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" value="<?= $usuario['nombre'] ?>" name="nombre">
      </div>
      <div class="col-md-12">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" value="<?= $usuario['email'] ?>" name="email">
      </div>
      <div class="col-md-12">
        <label for="contraseña" class="form-label">Password</label>
        <input type="password" class="form-control" value="<?= $usuario['password'] ?>" name="password">
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Actualizar Datos</button>
      </div>
    </form>
  </div>
</div>


<?= $footer ?>