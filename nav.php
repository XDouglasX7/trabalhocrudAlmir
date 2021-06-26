
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    

    <title>Sistema de Concessionaria</title>
</head>

<body>
   <!-- menu suspenso -->
  <nav class="grey darken-2">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo right"><img src="imagens/carro.png" width="110"></a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="listaMarca.php">Marcas</a></li>
        <li><a href="listaDono.php">Clientes</a></li>
        <li><a href="listaVeiculo.php">Veiculos</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
  </nav>

  <!-- menu lateral -->
  <ul id="slide-out" class="sidenav">
    <!-- <div class="teal lighten-5"> -->
    <li><div class="user-view">
      <div class="background">
        <img src="imagens/azul.png">
      </div>
      <a href="#user"><img class="circle" src="imagens/mecanico.jfif"></a>
      <a href="#name"><span class="white-text name">Douglas</span></a>
      <a href="#email"><span class="white-text email">douglas_vsv50@hotmail.com</span></a>
    </div></li>
    <li><a href="frmInsMarca.php"><i class="material-icons">description</i>Cadastrar Marca</a></li>
    <li><a href="frmInsDono.php"><i class="material-icons">person</i>Cadastrar Cliente</a></li>
    <li><a href="frmInsVeiculo.php"><i class="material-icons">directions_car</i>Cadastrar Veículo</a></li>
    <li><a class="subheader"></a></li>
    <li><a class="subheader"></a></li>
    <li><a class="subheader"></a></li>
    <li><a class="subheader"></a></li>
    <li><a class="subheader"></a></li>
    <li><a class="subheader"></a></li>
    <li><a class="subheader"></a></li>
    
    <li><a href="logout.php">Logout<i class="material-icons center">subdirectory_arrow_left</i> </a></li>
    <!-- </div> -->
  </ul>
  <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        
</body>
</html>

<script type="text/javascript"> 

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  });

  // Initialize collapsible (uncomment the lines below if you use the dropdown variation)
  // var collapsibleElem = document.querySelector('.collapsible');
  // var collapsibleInstance = M.Collapsible.init(collapsibleElem, options);

  // Or with jQuery

  $(document).ready(function(){
    $('.sidenav').sidenav();
  });

</script>