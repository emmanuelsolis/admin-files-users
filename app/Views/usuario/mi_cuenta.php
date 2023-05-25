    <?= $header ?>
    <style>
        body {
            background-color: #e6e6ff;
            height: 100vh;
        }
        .table {
            width: 40%;
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
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Larry</td>
                      <td>the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>
            </div>
        </div>
    
    </div>
    
    <?= $footer ?>