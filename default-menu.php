<?php 


function createMenuTop($perfil) {
    $menu = '<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Help
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
          <a class="dropdown-item" href="#">FAQ</a>
          <a class="dropdown-item" href="#">Support</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Contact</a>
        </div>
      </li>
    </ul>';
    
    if ( $perfil == 1) {
        $menu .= '<ul class="navbar-nav ml-auto">
          <li>
            <a class="display-7" href="../paginas/create" style="color: gray; text-decoration: none;"> + Create </a>
          </li>
          <li class="nav-item dropdown">
             x xxcv
          </li>
        </ul>';
    }
    
    $menu .= '</nav>';
    
    return $menu;
}


