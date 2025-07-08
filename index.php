<?php include "../validar.php";
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Meta obrigatória do Bootstrap -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

    <!-- Bootstrap CSS local -->
    <link href="restrito/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
        <div class="row">
               <div class="col-6">
        <div class="p-5 mb-4 bg-light rounded-3">
  <div class="container-fluid py-5">
    <h1 class="display-5 fw-bold">Cadastro Web</h1>
<form action="index.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Login</label>
    <input type="text" class="form-control" name="login">
    <div id="emailHelp" class="form-text">Entre com seus dados de acesso.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Senha</label>
    <input type="password" class="form-control" name="senha">
  </div>
  <button type="submit" class="btn btn-primary">Entrar</button>
</form>
<?php
include "restrito/conexao.php";

if(isset($_POST['login'])){
    $login = mysqli_real_escape_string($conn, $_POST['login']);
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);


$sql = "SELECT * FROM `usuarios` WHERE `login` = '$login' AND `senha` = '$senha'";

if($result = mysqli_query($conn,$sql)){

$num_registros = mysqli_num_rows($result);
if($num_registros ==1) {
$linha = mysqli_fetch_assoc($result);


       if(($login ==$linha['login']) and ($senha == $linha['senha'])) {
        session_start();
        $_SESSION['login'] = "robson";
        header("location: restrito");
       } else {
        echo "Login Invalido!";
       }
} else{
  echo"Login e senha não encontrados ou invalido!";
}
} else{ echo"Nenhum resultado do banco de dados";}

}


?>

</div>

    </div>
    </div>
   
    <!-- Bootstrap JS local (inclui Popper) -->
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
   
