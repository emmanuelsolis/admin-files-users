<?=$header ?>
<style>
  section {
      height: 400px; /* Altura del contenedor */
      display: flex;
      flex-direction: column; /* Alinea verticalmente */
      align-items: center; /* Centra verticalmente los elementos */
      justify-content: center;
</style>
<section>
  <a href="<?= site_url('register')?>">
    <h3 class="text-center">Registrarse</h3>
  </a>
  <a href="<?= site_url('/login')?>">
    <h3 class="text-center">Ingresar</h3>
  </a>
</section>

<?=$footer ?>