<?php 
    session_start();
    include '../../header.php';
    include '../../src/database/DB.class.php';
    include '../../default-menu.php';

    $perfil = $_SESSION['perfil'];
    $id = $_SESSION['id'];

   

    $database = new DB();
    $query = "SELECT menu.link FROM menu
              LEFT JOIN perfil_menu ON menu.id = perfil_menu.id_menu
              LEFT JOIN perfil ON perfil_menu.id_menu = perfil.id
              LEFT JOIN usuarios ON perfil.id = usuarios.perfil
              WHERE usuarios.perfil = $perfil AND usuarios.id = $id";
    $result = $database->get_results($query);
    echo $perfil;
    echo CreateHeader('Painel');
?>
  
<body>
  <?= createMenuTop($perfil); ?>
  <aside class="main-sidebar sidebar-dark-primary elevation-1"> 
            <a href="." class="brand-link">
                <h1 class="text-center"> Site Massa  </h1>
            </a>
            
            <div class="container d-flex justify-content-center" style="margin-top:20px; ">
                <form class="form-inline ">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search" style="background-color:#505055; border:0px; color:white; width:120%;">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form> 
            </div>
            
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">

                  <li class="nav-item" style="color:#ffffff;">
                      <a href="../../paginas/um" class="nav-link">
                          Primeira Página
                      </a>
                  </li>
                  <li class="nav-item" style="color:#ffffff;">
                      <a href="../../paginas/dois" class="nav-link">
                          Segunda Página
                      </a>
                  </li>
                  <li class="nav-item" style="color:#ffffff;">
                      <a href="../../paginas/tres" class="nav-link">
                          Terceira Página
                      </a>
                  </li>
                </ul>
            </nav>
        </aside>
  <main class="container"  >
  <div class="col"></div>
      <div class="row mt-5">
        <div class="col-3">
            <div class="card card-outline card-primary">
              <div class="card-header">
              <a class="display-6" href="../paginas/read" style="color:black; text-decoration: none;">Read</a>
              </div>
            </div>
        </div>
      </div>
  </div>
  </main>





</body>


 