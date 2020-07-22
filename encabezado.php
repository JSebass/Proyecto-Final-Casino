<?php
  error_reporting(0);
?>
<!DOCTYPE html>

<html>
    <head>    
      <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>POKER AND WEED</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="css/style.css">

  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

    </head>
    <body>
      <?php
        $usuario = $_SESSION['nombre_cli'];
        if($usuario==NULL||$usuario==''){
          echo('<!-- Navbar -->
          <nav class="navbar navbar-expand-lg navbar-dark pink darken-4">
        
          <!-- Navbar brand -->
          <a class="navbar-brand text-uppercase" href="index.php">POKER AND WEED </a>
        
          <!-- Collapse button -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2"
            aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <!-- Collapsible content -->
          <div class="collapse navbar-collapse" id="navbarSupportedContent2">
        
            <!-- Links -->
            <ul class="navbar-nav mr-auto">
        
              
              
        
            </ul>
            <!-- Links -->
        
            <!-- Search form -->
            <form class="form-inline">
              <div class="md-form my-0">
              <a class="btn aqua-gradient" href="ingresar.php">Inicie sesion</a>
              <a class="btn aqua-gradient"href="formregistrarcli.php" >Registrarse</a>
              </div>
            </form>
        
          </div>
          <!-- Collapsible content -->
        
          </nav>
          <!-- Navbar -->');
        }elseif($usuario=='admin'){
          echo('<!-- Navbar -->
          <nav class="navbar navbar-expand-lg navbar-dark pink darken-4">
        
          <!-- Navbar brand -->
          <a class="navbar-brand text-uppercase" href="index.php">POKER AND WEED </a>
        
          <!-- Collapse button -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2"
            aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <!-- Collapsible content -->
          <div class="collapse navbar-collapse" id="navbarSupportedContent2">
        
            <!-- Links -->
            <ul class="navbar-nav mr-auto">
        
              <!-- Features -->
              
              <!-- Multi-level dropdown -->
              <li class="nav-item ">
                <a href="listacli.php" id="menu" 
                  class="nav-link text-uppercase">CLIENTES</a>
              </li>
              <li class="nav-item ">
                <a href="empleados.php" id="menu" 
                  class="nav-link text-uppercase">EMPLEADOS</a>
              </li>
              <li class="nav-item ">
                <a href="juegosadm.php" id="menu" 
                  class="nav-link text-uppercase">JUEGOS</a>
              </li>
              <li class="nav-item ">
                <a href="mesa.php" id="menu" 
                  class="nav-link text-uppercase">MESAS</a>
              </li>
              <li class="nav-item ">
                <a href="listapre.php" id="menu" 
                  class="nav-link text-uppercase">PREMIOS</a>
              </li>
            </ul>
            <!-- Links -->
        
            <!-- Search form -->
            <form class="form-inline">
              <div class="md-form my-0">
              <h1 style ="color: white;">Bienvenido '.$usuario.'        
              <a class="btn aqua-gradient"href="salir.php" >Salir</a>
              </h1>
              </div>
            </form>
        
          </div>
          <!-- Collapsible content -->
        
          </nav>
          <!-- Navbar -->');
        }else{
          echo('<!-- Navbar -->
          <nav class="navbar navbar-expand-lg navbar-dark pink darken-4">
        
          <!-- Navbar brand -->
          <a class="navbar-brand text-uppercase" href="index.php">POKER AND WEED </a>
        
          <!-- Collapse button -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2"
            aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <!-- Collapsible content -->
          <div class="collapse navbar-collapse" id="navbarSupportedContent2">
        
            <!-- Links -->
            <ul class="navbar-nav mr-auto">
        
              <!-- Features -->
              
              <!-- Multi-level dropdown -->
              <li class="nav-item ">
                <a href="juegoscli.php" id="menu" 
                  class="nav-link text-uppercase">JUEGOS</a>
              </li>
              <li class="nav-item ">
                <a href="reglas.php" id="menu" 
                  class="nav-link text-uppercase">REGLAS DE JUEGO</a>
              </li>
              <li class="nav-item ">
                <a href="listaprecli.php" id="menu" 
                  class="nav-link text-uppercase">PREMIOS</a>
              </li>
            </ul>
            <!-- Links -->
        
            <!-- Search form -->
            <form class="form-inline">
              <div class="md-form my-0">
              <h1 style ="color: white;">Bienvenido '.$usuario.'        
              <a class="btn aqua-gradient"href="salir.php" >Salir</a>
              </h1>
              </div>
            </form>
        
          </div>
          <!-- Collapsible content -->
        
          </nav>
          <!-- Navbar -->');
        }

      ?>
      
    </body>
</html>