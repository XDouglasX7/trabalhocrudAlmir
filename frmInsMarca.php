<?php
   include 'nav.php'; 
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

    <title>Inserir Marca</title>
</head>
<body>
    <div class="container grey lighten-4 col s12">
        <div class="card-panel brown lighten-4 col s12">
            <h3>Adicionar Nova Marca</h3>
        </div>
     <div class="row">
        <form action="insMarca.php" method="POST" id="frmInsMarca" class="col s12">
            <div class="input-field col s8">
                <label for="lblNome">Informe o Nome da Marca</label>
                <input type="text" class="form-control" id="txtNomeMarca" name="txtNomeMarca">
            </div>
            <div class="input-field col s5">
                <label for="lbldescMarca">Informe a Marca: </label>
                <input type="text" class="form-control" id="txtDescMarca" name="txtDescMarca">
            </div>
            <br>
            <div class="input-field col s8">
               <button class="btn waves-effect waves-light green" type="submit" name="btnGravar">
               Gravar <i class="material-icons">send</i> 
               </button>

               <button class="btn waves-effect waves-light orange" type="reset" name="btnLimpar">
               Limpar <i class="material-icons">brush</i> 
               </button>

               <button class="btn waves-effect waves-light indigo" type="button" name="btnVoltar"
                onclick="JavaScript:location.href='listaMarca.php'">
               Voltar <i class="material-icons">arrow_back</i> 
               </button>
            </div>

        </form>   
     </div>
    </div>
</body>
</html>