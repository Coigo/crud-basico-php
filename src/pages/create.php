<?php 
include '../database/DB.class.php';

if ($_POST) {
    $database = new DB();


    if($_POST['id']) {

        $where = array( 'id' => $_POST['id'] );
		$query = $database->update( 'usuarios', $_POST, $where, 1 );
    }
    else {
        $query = $database->insert( 'usuarios', $_POST );
    
        if ( $query ) {
            $idLast = $database->lastid();
            echo 'deu certo';
        }   else {
                echo 'deuerrao';
        }

    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>READ</title>
</head>
<body>

    <div class="container ">
        <div class="d-flex justify-content-center">
            <div class="col-md-6">
                <h1 class="md-4">Cadastro</h1>
                <form action="./create.php" method='post'>
                    <div class="form-group">
                        <label for="nome"> Nome Completo </label>
                        <input class="form-control"type="text" name="nome" id="nome">
                    </div>
                    <div class="form-group">
                        <label for="email"> Email </label>
                        <input class="form-control"type="email" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="telefone"> Telefone </label>
                        <input class="form-control"type="text" name="telefone" id="telefone"  placeholder='(00) 00000-0000'> 
                    </div>
                        <input type="hidden" name="id" id="id" value="<?= $_GET['id']?>">
                        <input class='btn btn-success' type="submit" value="enviar">
                </form>

            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>