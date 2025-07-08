<?php include "../validar.php";
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Meta obrigatória do Bootstrap -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Exclusão de Cadastro</title>

    <!-- Bootstrap CSS local -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body> 
    <div class="container">
        <div class="row">
              <?php
              include "mensagem.php";
              include "conexao.php";
              $id=$_POST["id"];
          $nome=$_POST["nome"];
        
$sql ="DELETE from `pessoas` WHERE cod_pessoa = $id";



if (mysqli_query($conn, $sql)){
    mensagem("$nome, excluido com sucesso",'success');

} else mensagem("$nome, NÃO excluido!!",'danger');
    ?>

  <a href="cadastro.php" class="btn btn-primary">Voltar para página inicial</a>
        </div>
    </div>
   

    <!-- Bootstrap JS local (inclui Popper) -->
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
