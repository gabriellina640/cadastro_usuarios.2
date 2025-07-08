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
  </head>
  <body>



<?php
include "conexao.php";
$id=$_GET['id'] ?? '';
$sql = "SELECT * FROM pessoas WHERE cod_pessoa=$id";

$dados = mysqli_query($conn, $sql);
$linha = mysqli_fetch_assoc($dados);



?>

    <div class="container">
        <div class="row">
            <div class="col">
                    <h1>Alteração de Cadastro</h1>
<form action="edit_script.php" method="POST">
    
     <div class="mb-3">
    <label for="nome" class="form-label">Nome completo</label>
    <input type="text" class="form-control" placeholder="Digite seu nome" name="nome" required value="<?php echo $linha ['nome'];  ?>">
  </div>
    <div class="mb-3">
    <label for="endereco" class="form-label">Endereço</label>
    <input type="text" class="form-control" placeholder="Digite seu endereço" name="endereco"value="<?php echo $linha['endereco'];  ?>">
  </div>
   <div class="mb-3">
    <label for="telefone" class="form-label">Telefone</label>
    <input type="text" class="form-control" placeholder="Digite seu telefone" name="telefone"value="<?php echo $linha['telefone'];  ?>">
  </div>
   <div class="mb-3">
    <label for="email" class="form-label">E-mail</label>
    <input type="email" class="form-control" placeholder="Digite seu email" name="email"value="<?php echo $linha['email']; ?>">
  </div>
   <div class="mb-3">
    <label for="data_nascimento" class="form-label">Data de Nascimento</label>
    <input type="date" class="form-control" placeholder="Digite sua data de nascimento" name="data_nascimento"value="<?php echo $linha['data_nascimento'];  ?>">
  </div>
   <div class="mb-3">
    <input type="submit" class="btn btn-success" value="Salvar Alterações">
    <input type="hidden" name="id" value="<?php echo $linha['cod_pessoa']; ?>">
  </div>
</form>     
  <a href="index.php" class="btn btn-info">Voltar para o inicio</a>       
            </div>
        </div>
    </div>
   
    <!-- Bootstrap JS local (inclui Popper) -->
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
   