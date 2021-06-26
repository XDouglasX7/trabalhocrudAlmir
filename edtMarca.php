<?php  
   //abrir a conexão 
   include 'conexao.php';  

   // recupar campos do formulário usando método post
   $id = trim($_POST['id']); 
   $nome = trim($_POST['txtNome']);
   $desc = trim($_POST['txtdescMarca']);
  

   if (!empty($nome) && !empty($desc)){
       $pdo = Conexao::conectar(); 
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql = "UPDATE tblmarca SET nomeMarca=?, descMarca=? WHERE idMarca=?";
       $query = $pdo->prepare($sql);
       $query->execute(array($nome, $desc,  $id));
       Conexao::desconectar(); 
   }
   else echo "campo nome ou nota são vazios..."; 
   header("location: listaMarca.php")
?>