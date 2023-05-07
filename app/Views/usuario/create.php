<?= $header ?>
<style>
  label {
    float: left;
  }

</style>
<div align="center" style="margin:auto; width:30%;"class="card" style="width:18rem;">
  <h1>Formulario de Registro</h1>
  <div class="card-body">
    <h5 class="card-title">Ingresa tus datos</h5>
    <form class="row g-3" method="POST" action="<?= site_url('/guardar') ?>">
      <div class="col-md-12">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="nombre">
      </div>
      <div class="col-md-12">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email">
      </div>
      <div class="col-md-12">
        <label for="inputPassword4" class="form-label">Contraseña</label>
        <input type="password" class="form-control" name="password">
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Registrarse</button>
      </div>
    </form>
  </div>
</div>


<?= $footer ?>