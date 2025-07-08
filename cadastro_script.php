<?php include "../validar.php";
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Meta obrigatória do Bootstrap -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cadastro</title>

    <!-- Bootstrap CSS local -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
  </head>
  <body> 
    <div class="container">
        <div class="row">
              <?php
              include "conexao.php";
          $nome=$_POST["nome"];
           $endereco=$_POST["endereco"];
            $telefone=$_POST["telefone"];
             $email=$_POST["email"];
              $data_nascimento=$_POST["data_nascimento"];


$foto = $_FILES['foto'];
$nome_foto = mover_foto($foto);
if($nome_foto ==0) {
  $nome_foto = null;
}

        
$sql ="INSERT INTO `pessoas` (`nome`, `endereco`, `telefone`, `email`, `data_nascimento`, `foto`)  
VALUES ('$nome', '$endereco', '$telefone', '$email', '$data_nascimento', '$nome_foto')";

if (mysqli_query($conn, $sql)){
if ($nome_foto != null){
  echo"<img src='img/$nome_foto' title='$nome_foto' class='mostra_foto'>";


}
}


if (mysqli_query($conn, $sql)){
  if ($nome_foto!=null){

  echo "<img src='img/$nome_foto' title='$nome_foto' class='mostra_foto'>";
}
    mensagem("$nome, cadastrado com sucesso",'success');

} else mensagem("$nome, NÃO cadastrado!!",'danger');
    ?>

  <a href="cadastro.php" class="btn btn-primary">Voltar para página inicial</a>
        </div>
    </div>
   
    <!-- Bootstrap JS local (inclui Popper) -->
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
