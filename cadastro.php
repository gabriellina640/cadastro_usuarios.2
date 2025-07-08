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
    <div class="container">
        <div class="row">
            <div class="col">
                    <h1>Cadastro</h1>
<form action="cadastro_script.php" method="POST" enctype="multipart/form-data">
    
     <div class="form-group">
    <label for="nome" >Nome completo</label>
    <input type="text" class="form-control" placeholder="Digite seu nome" name="nome" required>
  </div>
    <div class="form-group">
    <label for="endereco" >Endereço</label>
    <input type="text" class="form-control" placeholder="Digite seu endereço" name="endereco">
  </div>
   <div class="form-group">
    <label for="telefone">Telefone</label>
    <input type="text" class="form-control" placeholder="Digite seu telefone" name="telefone">
  </div>
   <div class="form-group">
    <label for="email">E-mail</label>
    <input type="email" class="form-control" placeholder="Digite seu email" name="email">
  </div>
   <div class="form-group">
    <label for="data_nascimento" >Data de Nascimento</label>
    <input type="date" class="form-control" placeholder="Digite sua data de nascimento" name="data_nascimento">
  </div>
  <div class="form-group">
    <label for="foto">Foto</label>
    <input type="file" class="form-control" name="foto" accept="image/*">
  </div>
   <div class="form-group">
    <input type="submit" class="btn btn-success" value="Enviar" name="Enviar">
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
   