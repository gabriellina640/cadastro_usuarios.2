<?php include "../validar.php";
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Meta obrigatória do Bootstrap -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Alteração de Cadastro</title>

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
           $endereco=$_POST["endereco"];
            $telefone=$_POST["telefone"];
             $email=$_POST["email"];
              $data_nascimento=$_POST["data_nascimento"];
        
$sql ="UPDATE pessoas SET `nome` ='$nome', `endereco`='$endereco', `telefone`= '$telefone', `email`= '$email', `data_nascimento`='$data_nascimento' WHERE cod_pessoa = $id";



if (mysqli_query($conn, $sql)){
    mensagem("$nome, alterado com sucesso",'success');

} else mensagem("$nome, NÃO alterado!!",'danger');
    ?>

  <a href="cadastro.php" class="btn btn-primary">Voltar para página inicial</a>
        </div>
    </div>
   

    <!-- Bootstrap JS local (inclui Popper) -->
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
