<?php
session_start();

// Verifica se os campos do formulário foram submetidos
if(isset($_POST['enviar'])) {
    // Recupera os dados do formulário
    $nome = $_POST['nome'];
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];
    
    // Aqui você faria o registro do usuário no banco de dados
    
    // Após o registro bem-sucedido, armazene o nome do usuário na variável de sessão
    $_SESSION['username'] = $nome;
    
    // Redireciona o usuário para a página principal
    header('Location: index3.php');
    exit();
}
?>

<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v5.9.18, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.9.18, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>Registro</title>
  <link rel="stylesheet" href="assets2/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets2/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets2/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets2/theme/css/style.css">
  <link rel="preload" as="style" href="assets2/mobirise/css/mbr-additional.css?v=sIinvL"><link rel="stylesheet" href="assets2/mobirise/css/mbr-additional.css?v=sIinvL" type="text/css">

  
  
  
</head>
<body>
  
  <section data-bs-version="5.1" class="form4 cid-ubQHv0mN4T mbr-fullscreen" id="form4-1">

    

    

    <div class="container">
        <div class="row content-wrapper justify-content-center">
            <div class="col-lg-3 offset-lg-1 mbr-form" data-form-type="formoid">
                <form action="envioregistro.php" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name">
                    <input type="hidden" name="email" data-form-email="true" value="hfPMwNnT4StvdOz3U+uM/9awuKywCrV9i/cyv8pXD3ftXOmy9kueQE+aQie68b/yU6JfpN5jwMtKhB5/3wa8fdmNRjulCtgP11LGWZsZ/8Xaim7XNtPAtxtZb4RvmxaH">
                    <div class="row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Registro Feito Com Sucesso!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                            Oops...! some problem!
                        </div>
                    </div>
                    <div class="dragArea row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h1 class="mbr-section-title mb-4 display-2">Registre-se</h1>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            
                        </div>
                        <div class="col-lg-12 col-md col-12 form-group mb-3" data-for="name">
                            <input type="text" name="nome" placeholder="Nome" data-form-field="name" class="form-control" value="" id="name-form4-1" onkeyup=mudarFonte(this)>
                        </div>
                        <div class="col-lg-12 col-md col-12 form-group mb-3" data-for="name">
                            <input type="text" name="usuario" placeholder="Usuário" data-form-field="name" class="form-control" value="" id="name-form4-1" onkeyup=mudarFonte(this)>
                        </div>
                        <div class="col-lg-12 col-md col-12 form-group mb-3" data-for="email">
                            <input type="text" name="email" placeholder="email" data-form-field="name" class="form-control" value="" id="name-form4-1" onkeyup=mudarFonte(this)>
                        </div>
                        <div class="col-lg-12 col-md col-12 form-group mb-3" data-for="cpf">
                            <input type="text" name="cpf" placeholder="CPF" data-form-field="name" class="form-control" value="" id="name-form4-1" onkeyup=mudarFonte(this) oninput=formatarCPF(input)>
                        </div>
                        <div class="col-lg-12 col-md col-12 form-group mb-3" data-for="senha">
                            <input type="password" id="senha" name="senha" placeholder="Senha (min. 8 carácteres)" data-form-field="name" class="form-control" value="" id="name-form4-1" onkeyup=mudarFonte(this)>
                        </div>
                        <div class="col-lg-12 col-md col-12 form-group mb-3" data-for="senha">
                            <input type="password" id="cofirmasenha" name="confirmasenha" placeholder="Confirme Sua Senha" data-form-field="email" class="form-control" value="" id="email-form4-1" onkeyup=mudarFonte(this)>
                        </div>
                        <div class="col-12 col-md-auto mbr-section-btn"><button type="submit" name="enviar" class="btn btn-success display-4">Concluir</button></div>
                    </div>
                </form>
            </div>
            <div class="col-lg-7 offset-lg-1 col-12">
                <div class="image-wrapper">
                    <img class="w-100" src="assets2/images/logo-temp.jpg" alt="Mobirise Website Builder">
                </div>
            </div>
        </div>
    </div>
  
    <script>
        function validarSenha() {
        var senha = document.getElementById('senha').value;
        var confirmarSenha = document.getElementById('confirmasenha').value;

        if (senha != confirmasenha) {
            alert("As senhas não correspondem!");
            return false;
        }
            return true;
        }
    </script>
    
    <script>
        function formatarCPF(input) {
        // Remove caracteres não numéricos do valor do input
        input.value = input.value.replace(/\D/g, '');
        }
    </script>

    <script>
        function mudarFonte(input) {
         input.style.fontFamily = "Helvetica, sans-serif";
        }
    </script>

</body>
</html>