<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Alteracao</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
<?php
  include "conecta.php";

  $id = $_GET["cod"];
  
  $nome = $_POST["nome"];
  $ano = $_POST["ano"];
  $banda = $_POST["banda"];
  $midia = $_POST["midia"];
  $genero = $_POST["genero"];
  $nota = $_POST["nota"];
 

  $sql = "UPDATE discos SET nome='$nome', ano='$ano', banda='$banda', midia='$midia', genero='$genero', nota=$nota WHERE id=$id";
  
  // executa o comando SQL
  $result = $conn->query($sql);
    
  if ($result) {
    echo "<h3> Ok! Disco <b>$nome</b> alterado com sucesso!!</h3>";
  } else {
    echo "<h3> Erro... Não foi possível alterar <b>$nome</b> </h3>";    
  }

// fecha a conexão com o banco
  $conn->close();
?>
  <a href='lista.php' style="margin-top: 20px;" class='btn btn-primary' 
     role='button'>Voltar</a>

</div>
</body>