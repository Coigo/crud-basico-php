<?php 
    include '../header.php' 
?>

<?php echo CreateHeader('Login') ?>

<body class="bg-dark">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-6 m-5 " >
                <div class="container p-5">
                    <p class="display-2 mb-5"><strong style="color:#ae5cea;">Login</strong></p>
                    <div class="m-4">
                        <form class="m-5 ml-5"action="">
                            <div class="form-group mb-5">
                                <label for="user"  style="color:#ffffff;" >Nome de Usuário</label>
                                <input  class="form-control" type="text" name="user" id="user">
                            </div>
                            <div class="form-group mb-3">
                                <label for="senha"  style="color:#ffffff;" >Senha</label>
                                <input class="form-control" type="password" name="senha" id="senha">
                            </div>
                            <input class="btn mb-3" style="background-color:#ae5cea;" type="submit" value="Login">
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