<?= $header ?>
try{

    $base=new PDO("mysql:host=localhost; ")

}catch(Exception $e){

    die("Error: " . $e->getMessage());
}


<?= $footer ?>