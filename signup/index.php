<?php 
    include '../header.php' ;
    include '../src/database/DB.class.php';


    if ( $_POST ) {

        $post['nome'] = $_POST['user'];
        $post['senha'] = $_POST['senha'];
  
            $database = new DB();
            $insert = $database->insert( 'usuarios', $post );
            header("Location: ../login");
            exit;
            
    }


    
?>

<?php echo CreateHeader('Sign Up') ?>

<body class="bg-dark">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-6 m-5 " >
                <div class="container p-5">
                    <p class="display-2 mb-5"><strong style="color:#ae5cea;">Sign Up </strong></p>
                    <div class="m-4">
                        <form class="m-5"action="." method="post" id="Form">
                            <div class="form-group mb-5">
                                <label for="user"  style="color:#ffffff;" >Nome de Usuário</label>
                                <input  class="form-control" type="text" name="user" id="user" required>
                            </div>
                            <div class="form-group mb-5">
                                <label for="senha"  style="color:#ffffff;" >Senha</label>
                                <input class="form-control" type="password" name="senha" id="senha" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="senha"  style="color:#ffffff;" > Confirme sua senha</label>
                                <input class="form-control" type="password" id="confirm" required>
                            </div>

                        </form>
                        <button class="btn mr-5 " style="background-color:#ae5cea;" id="send" >   Criar   </button>
                        <p>Já tem uma conta? <a href="../login" style="color:#ae5cea;">Entre!</a></p>
                    </div>

                </div>
            </div>
            <div class="col-6"></div>
        </div>
    </div>



    <script>
        const confirm = document.getElementById('confirm');
        const senha = document.getElementById('senha');
        const form = document.getElementById('Form');
        
        document.getElementById('send').addEventListener('click', () => {
            if (senha.value === confirm.value) {
                form.submit()
            }
            else {
                console.log('err')
            }
        });
    </script>
</body>
</html>