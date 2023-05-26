    <?= $header ?>
    <style>
        .card-body{
            text-align: center;
        }
        .table {
            width: 30%;
            margin: 5% auto;
        }
        .footer{
          background-color: #8080ff;  
         
        }
    </style>
    <h1>Bienvenido <?= $usuario ?></h1>
    <div class="card-group table">
        <div class="card">
            <img class="card-img-top" src="holder.js/100x180/" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title"><?= $usuario ?></h4>
                <h5 class="card-text"><?= $rol ?></h5>
            </div>
        </div>
    
    </div>
    
    <?= $footer ?>