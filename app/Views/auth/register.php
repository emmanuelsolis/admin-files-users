<?= $header ?>
<style>
    body {
        height: 100vh;
    }
    .botones {
        display: flex;
        /* flex-direction:  column-reverse; */
        justify-content: space-around;
    }
    h1 {
        text-align : center ;
        margin-bottom: 50px;
    }
    .login__container {
        margin : auto ;
        border : 1px solid #aaaa ;
        padding : 20px ;
        border-radius : 10px ;
        margin-bottom: 50px;
    }
</style>
<h1>Ingresa tus datos para registarte</h1>
<div id="errorMessages"></div>

<div class="login__container col-3 ">
    <form action="<?php echo base_url('registro/guardar') ?>" method="post">
        <div class="mb-3">
            <label for="usuario" class="form-label">Nombre de usuario</label>
            <input type="text" class="form-control" id="usuario" name="usuario" required>
        </div> 
        <div class="mb-3">
            <label for="email" class="form-label">Correo electrónico</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Repite nuevamente tu contraseña</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="botones">
            <button type="submit" class="btn btn-primary mb-3 col-5">Registrar</button>
        </div>
    </form>
</div>
<script src="./validations.js"></script>
<?= $footer ?>