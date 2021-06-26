<?php 
   //abrir a conexão 
   include 'conexao.php';  

   // recupar campos do formulário usando método post
   $nomeMarca = trim($_POST['txtNomeMarca']);
   $descMarca = trim($_POST['txtDescMarca']);
  

   if (!empty($nomeMarca)){
       $pdo = Conexao::conectar(); 
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql = "INSERT INTO tblmarca (nomeMarca, descMarca) VALUES (?, ?);";
       $query = $pdo->prepare($sql);
       $query->execute(array($nomeMarca, $descMarca));
       Conexao::desconectar(); 
   }
   else echo "campo nome ou nota são vazios..."; 
  
   header("location: listaMarca.php")
?>