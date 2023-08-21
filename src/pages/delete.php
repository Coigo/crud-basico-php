

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 
    include '../database/DB.class.php';
    $database = new DB();

    if ($_POST) {
        $where = array( 'id' => $_POST['id'] );
        $delete = $database->delete( 'usuarios', $where, 1 );
        echo '<h1>Usuario Apagado</h1>';
    } else {
        echo '<h1>Deseja mesmo apagar este usuário</h1>
        <form action="./delete.php" method="post">
            <input type="hidden" name="id" value="' . $_GET["id"] . '">
            <input type="submit">
        </form>';
    }
?>
    

</body>
</html>