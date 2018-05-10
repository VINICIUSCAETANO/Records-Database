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
    <title>Bandas e Discos</title>
</head>

<body>
    <div class="container">
        <div class="row">
        <a href="lista.php" class="btn btn-dark" role="button" style="margin-bottom: 20px">Lista</a>
        </div>
<?php
include "conecta.php";

    //recupera os conteúdos dos campos de formulário
    $nome = $_POST["nome"];
    $ano = $_POST["ano"];
    $banda = $_POST["banda"];
    $midia = $_POST["midia"];
    $genero = $_POST["genero"];
    $nota = $_POST["nota"];

$sql = "INSERT INTO discos (nome, ano, banda, midia, genero, nota)
VALUES ('$nome', '$ano', '$banda', '$midia', '$genero', $nota)";

if ($conn->query($sql) === TRUE) {
    echo "<h1>Disco cadastrado com sucesso</h1>";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
        <a href='lista.php' style="margin-top: 20px;" class='btn btn-primary' 
     role='button'>Voltar</a> 
    </div>
</body>