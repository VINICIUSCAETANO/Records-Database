<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Bandas e Discos - Listagem</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
        <a href="index.html" class="btn btn-dark" role="button" style="margin-bottom: 20px">Inserir</a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <form class="form-inline" method="get" action="pesquisa.php">
           <label for="pesquisa">Pesquisar:</label> &nbsp;&nbsp;
           <input type="text" id="pesquisa" name="pesquisa"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
         </div>
        <div class="row">
        <table class="table table-hover table-dark">
    <thead>
      <tr>
         <th>ID</th>
        <th>Disco</th>
        <th>Ano</th>
        <th>Banda</th>
        <th>Mídia</th>
        <th>Gênero</th>
        <th>Nota</th>
      </tr>
    </thead>
    <tbody>

<?php
include "conecta.php";

$sql = "SELECT * FROM discos";
$result = $conn->query($sql);
$num=0;

if ($result->num_rows > 0) {
    // output data of each row
    while($linha = $result->fetch_assoc()) {
        $id = $linha["id"];
        $nome = $linha["nome"];
        $ano = $linha["ano"];
        $banda= $linha["banda"];
        $midia= $linha["midia"];
        $genero= $linha["genero"];
        $nota= $linha["nota"];

        echo "<tr><td>".$id."</td>";
        echo "<td>".$nome."</td>";
        echo "<td>".$ano."</td>";
        echo "<td>".$banda."</td>";
        echo "<td>".$midia."</td>";
        echo "<td>".$genero."</td>";
        echo "<td>".$nota."</td>";
        echo "<td><a href='altera.php?cod=$id' class='btn btn-warning btn-sm' role='button'>Alterar</a> &nbsp; &nbsp;";
        echo "<a href='exclui.php?cod=$id' class='btn btn-danger btn-sm' role='button'>Excluir</a></td></tr>";

        $num++;
    }
    echo "</tbody></table>";

    echo "<h3> Numero de discos listados: $num </h3>";
}
else {
    echo "0 results";
}
$conn->close();
?>
</div>
</div>

</body>
</html>