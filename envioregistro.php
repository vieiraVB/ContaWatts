<?php
session_start();

$nome = $_POST["nome"];
$usuario = $_POST["usuario"];
$email = $_POST["email"];
$cpf = $_POST["cpf"];
$senha = $_POST["senha"];
$confirmasenha = $_POST["confirmasenha"];
$enviar = $_POST["enviar"];

include("conexao.php");

if(isset($enviar)) {
    // Verifica se o CPF contém apenas números
    if(!ctype_digit($cpf)) {
         echo '<script>
            alert("CPF Inválido! Digite apenas números.");
            window.location="registro.php";
            </script>';
         exit;
    }

    // Verifica se o CPF tem o número mínimo de caracteres
    if(strlen($cpf) !== 11) {
        echo '<script>
            alert("CPF Inválido!");
            window.location="registro.php";
            </script>';
        exit;
    }

    // Verifica o comprimento mínimo e máximo das senhas
    $comprimento_minimo = 8;
    $comprimento_maximo = 16;

    if(strlen($senha) < $comprimento_minimo || strlen($senha) > $comprimento_maximo) {
        echo '<script>
            alert("A senha deve ter entre '.$comprimento_minimo.' e '.$comprimento_maximo.' caracteres.");
            window.location="registro.php";
            </script>';
        exit; // Encerra o script para evitar processamento adicional
    }

    // Verifique se as senhas coincidem
    if($senha != $confirmasenha) {
        echo '<script>
            alert("As senhas não coincidem. Por favor, digite as senhas novamente.");
            window.location="registro.php";
            </script>';
        exit; // Encerra o script para evitar processamento adicional
    }

    // Verifique se o e-mail já está cadastrado
    $query_verificar_dados = "SELECT * FROM usuarios WHERE useremail = '$email'";
    $resultado_verificar_dados = mysqli_query($conect, $query_verificar_dados);

    // Se encontrar algum registro com o mesmo e-mail ou CPF
    if(mysqli_num_rows($resultado_verificar_dados) > 0) {
        echo '<script>
            alert("email já cadastrados. Por favor, utilize outro e-mail.");
            window.location="registro.php";
            </script>';
        exit; // Encerra o script para evitar processamento adicional
    }

    $query_verificar_dados = "SELECT * FROM usuarios WHERE userusuario = '$usuario'";
    $resultado_verificar_dados = mysqli_query($conect, $query_verificar_dados);

    // Se encontrar algum registro com o mesmo e-mail ou CPF
    if(mysqli_num_rows($resultado_verificar_dados) > 0) {
        echo '<script>
            alert("Usuário já cadastrados. Por favor, utilize outro nome de Usuário.");
            window.location="registro.php";
            </script>';
        exit; // Encerra o script para evitar processamento adicional
    }

    $query_verificar_dados = "SELECT * FROM usuarios WHERE usercpf = '$cpf'";
    $resultado_verificar_dados = mysqli_query($conect, $query_verificar_dados);

    // Se encontrar algum registro com o mesmo e-mail ou CPF
    if(mysqli_num_rows($resultado_verificar_dados) > 0) {
        echo '<script>
            alert("CPF já cadastrados. Por favor, utilize CPF.");
            window.location="registro.php";
            </script>';
        exit; // Encerra o script para evitar processamento adicional
    }

    // Se o CPF tiver 11 caracteres, as senhas coincidirem e os dados não estiverem duplicados, insira os dados no banco de dados
    $query_inserir = "INSERT INTO usuarios (id, usernome, userusuario, useremail, usercpf, usersenha) VALUES (NULL,'$nome', '$usuario','$email', '$cpf','$senha')";
    $resultado_inserir = mysqli_query($conect, $query_inserir);

    // Verifique se a inserção foi bem-sucedida
    if($resultado_inserir) {
        // Defina o nome do usuário na sessão
        $_SESSION['username'] = $nome;

        echo '<script>
        alert("Cadastro realizado com sucesso!");
        window.location="index3.php";
        </script>';
    } else {
        echo '<script>
        alert("Erro ao cadastrar. Por favor, tente novamente.");
        window.location="registro.php";
        </script>';
    }
}
?>