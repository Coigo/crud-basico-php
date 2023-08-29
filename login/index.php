<?php 
    include '../header.php' ;
    include '../src/database/DB.class.php';
    
    
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        session_start();
        
            $user = $_POST['user'];
            $senha = $_POST['senha'];

            $database = new DB();
          
            $query = "SELECT id, nome, perfil FROM usuarios WHERE nome = '$user' AND senha = '$senha'";
            $query = "SELECT menu.link FROM menu
            LEFT JOIN perfil_menu ON menu.id = perfil_menu.id_menu
            LEFT JOIN perfil ON perfil_menu.id_menu = perfil.id
            LEFT JOIN usuarios ON perfil.id = usuarios.perfil
            WHERE usuarios.perfil = $perfil AND usuarios.id = $id";
            $result = $database->get_results($query);
            print_r($result);
            
            if (!empty($result)) {
                $_SESSION['perfil'] = $result[0]['perfil'];
                $_SESSION['id'] = $result[0]['id'];
                $_SESSION['user'] = $result[0]['nome'];


                header('location: ../painel'.$.);
            } else {
                echo 'Usuário ou senha incorretos.';
            }

    }
?>

<?php echo CreateHeader('Login') ?>

<body class="bg-dark">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-6 m-5 " >
                <div class="container p-5">
                    <p class="display-2 mb-5"><strong style="color:#ae5cea;">Login</strong></p>
                    <div class="m-4">
                        <form class="m-5 ml-5"action="." method="post">
                            <div class="form-group mb-5">
                                <label for="user"  style="color:#ffffff;" >Nome de Usuário</label>
                                <input  class="form-control" type="text" name="user" id="user" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="senha"  style="color:#ffffff;" >Senha</label>
                                <input class="form-control" type="password" name="senha" id="senha" required>
                            </div>
                            <input class="btn mb-3" style="background-color:#ae5cea;" type="submit" value="Login" >
                            <p>Não tem uma conta? <a href="../signup" style="color:#ae5cea;">Crie uma!</a></p>
                        </form>
                    </div>

                </div>
            </div>
            <div class="col-6"></div>
        </div>
    </div>
</body>
</html>