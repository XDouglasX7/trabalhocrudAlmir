<?php //listarMarca.php
    if (isset($_GET['busca']))
    $busca = $_GET['busca'];
    else $busca = ''; 

 include 'conexao.php'; 
  $pdo = Conexao::conectar(); 
  $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
  if ($busca!='')
    $sql = "Select * from tblMarca WHERE nomeMarca like '%" . $busca .  "%' order by nomeMarca"; 
    else $sql = "Select * from tblMarca order by nomeMarca"; 
  $listaMarca = $pdo->query($sql);
?>
<?php include 'nav.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
   
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Lista Marca</title>
</head>
<body>
    
   <div class="container">
   <div class="row">
        <div class="col s12">
        <h3 class="card-panel orange lighten-2 white-text text-dark-3" class="text-orange">
          Listar Marca 
          <a class="btn-floating btn-large waves-effect waves-light green"
               onclick="JavaScript:location.href='frmInsMarca.php'"><i class="material-icons">add</i></a>
        </h3>

        <div class="row">
            <div class="input-field">
                <form action="listaMarca.php" method="GET" id="frmBuscaMarca" class="col s12" >
                    <div class="input-field col s12">
                        <label for="lblNome" class="red-text text-dark-4">Informe o nome da Marca: </label>
                        <input type="text" placeholder="informe o nome da marca para ser selecionado"
                               class="form-control col s8" id="txtBusca" name="busca">

                        <button class="btn waves-effect waves-light col m1" type="submit" name="action">
                        <i class="material-icons right">search</i></button>

                    </div>
                </form>
            </div>
        </div>
             
        <table class="striped highlight  blue lighten-3 responsive-table">
            <tr class="light-blue darken-4  grey-text text-lighten-3">    
                <th>Id</th>
                <th>NomeMarca</th>
                <th>DescMarca</th>
                <th colspan="2">Função</th>
            </tr>
            <?php 
              foreach ($listaMarca as $Marca){
            ?>
            <tr>
                    <td><?php echo $Marca ['idMarca'];?></td>
                    <td><?php echo $Marca ['nomeMarca'];?></td>
                    <td><?php echo $Marca ['descMarca'];?></td>
                    <td> <a class="btn-floating btn-small waves-effect waves-light orange"
                          onclick="JavaScript:location.href='frmEdtMarca.php?id=' +
                          <?php echo $Marca['idMarca'];?>" >
                           <i class="material-icons">edit</i>
                    </td>
                    <td> <a class="btn-floating btn-small waves-effect waves-light red"
                          onclick="JavaScript:location.href='frmRmvMarca.php?id=' +
                          <?php echo $Marca['idMarca'];?>" >
                           <i class="material-icons">delete</i>
                    </td>
                </tr>
            <?php
                }
            ?>
        </table>
      
      </div>
     </div>
    </div>
</body>
</html>