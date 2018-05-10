<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  <title> Exclusao </title>
</head>
<body>
    <div class="container">
<?php
  include "conecta.php";

  $id = $_GET["id"];

  // inclui arquivo com configurações de conexão

  
  // atribui a $sql o comando SQL a ser executado
  $sql = "DELETE FROM discos WHERE id=$id";
  
  // executa o comando SQL
  $result = $conn->query($sql);
    
  if ($result) {
    echo "<h3> Ok! Disco excluído com sucesso!!</h3>";
  } else {
    echo "<h3> Erro... Não foi possível excluir</h3>";    
  }

// fecha a conexão com o banco
  $conn->close();
?>
<p style="margin-top: 20px">
  <a href='lista.php' class='btn btn-primary'
     role='button'>Voltar</a>
</p>
</div>
</body>