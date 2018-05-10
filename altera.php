<?php
include "conecta.php";

$cod = $_GET["cod"];

$sql = "SELECT * FROM discos WHERE id=$cod";
$result = $conn->query($sql);

 
     $linha = $result->fetch_assoc(); 
     
     $nome = $linha["nome"];
     $ano = $linha["ano"];
     $banda = $linha["banda"];
     $midia = $linha["midia"];
     $genero = $linha["genero"];
     $nota = $linha["nota"];
       

$conn->close();

    ?>

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
            <form method="post" action="confirma_alteracao.php?cod=<?= $cod ?>">
            <div class="form-group">
            <label for="nome">Nome do Disco:</label>
            <input type="text" class="form-control" id="nome" 
                   name="nome" value="<?= $nome ?>">
          </div>
          <form method="post" action="confirma_exclusao.php?id=<?= $id ?>">
          <div class="form-group">
            <label for="ano">Ano:</label>
            <input type="text" class="form-control" id="ano" 
                   name="ano" value="<?= $ano ?>">
          </div>
          <form method="post" action="confirma_exclusao.php?id=<?= $id ?>">
          <div class="form-group">
            <label for="banda">Banda:</label>
            <input type="text" class="form-control" id="banda" 
                   name="banda" value="<?= $banda ?>">
          </div>
          <form method="post" action="confirma_exclusao.php?id=<?= $id ?>">
          <div class="form-group">
            <label for="midia">Mídia:</label>
            <input type="text" class="form-control" id="midia" 
                   name="midia" value="<?= $midia ?>">
          </div>
          <form method="post" action="confirma_exclusao.php?id=<?= $id ?>">
          <div class="form-group">
            <label for="genero">Gênero:</label>
            <input type="text" class="form-control" id="genero" 
                   name="genero" value="<?= $genero ?>">
          </div>
          <div class="form-group">
            <label for="nota">Nota:</label>
            <input type="text" class="form-control" id="nota" 
                   name="nota" value="<?= $nota ?>">
          </div>

            <input type="submit" class="btn btn-warning" value="Confirmar Alteração">  
            <span>&nbsp;&nbsp;
            <a href='lista.php' class='btn btn-primary btn-sm' role='button'>Voltar</a>                    
        </form>
    </div>
</body>

</html>