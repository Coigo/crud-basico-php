<?php 
    include '../database/DB.class.php';

    $database = new DB();
    $table_dados = 'usuarios';

    $dados = $database->get_results( "SELECT * FROM ".$table_dados."" );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="style/geral.css">
</head>
<body>
    <div class="bg-custom">

        <div class="d-flex justify-content-center">
            
                <div class="col-md-1 bg-div-success"></div>
                <div class="col-md-8">
                    <table id="table"class='table'>
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Telefone</th>
                            <th>Email</th>
                        </tr>
                        <?php foreach($dados as $row): ?>
                            <tr>
                                <td><?php echo $row['nome'] ?></td>
                                <td><?php echo $row['telefone'] ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td><a href="./create.php?id=<?= $row['id'] ?>">editar</a></td>
                                <td><a class="btn btn-danger" href="./delete.php?id=<?= $row['id'] ?>">delete</a></td>
                            </tr>
                            <?php endforeach?>
                        </thead>
                    </table>
                    
                </div>
                <div class="col-md-3"> 
                    <a class="btn btn-primary" href="./create.php">create</a>
    
                 </div>
    
        </div>
    
  
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>