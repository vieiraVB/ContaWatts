<?php
session_start(); // Inicia a sessão (se ainda não estiver iniciada)

// Verifica se o formulário foi enviado
if(isset($_POST["login"])) {
    // Obtém os dados do formulário
    $cpf = $_POST["cpf"];
    $senha = $_POST["senha"];

    // Inclui o arquivo de conexão com o banco de dados
    include("conexao.php");

    // Prepara a consulta SQL para selecionar o usuário pelo CPF
    $query = "SELECT * FROM usuarios WHERE usercpf = '$cpf'";
    $resultado = mysqli_query($conect, $query);

    // Verifica se o usuário foi encontrado
    if(mysqli_num_rows($resultado) == 1) {

        $row = $resultado->fetch_assoc();
        $confirmasenha = $row['usersenha'];
        $usuario = $row['userusuario'];
        // Verifica se a senha está correta
        if($senha == $confirmasenha) {
            // A senha está correta, então o login é bem-sucedido
            $_SESSION['username'] = $usuario; // Armazena o user do usuário na sessão
            echo '<script>
            alert("Login realizado com sucesso!");
            window.location="index3.php";
            </script>';
        } else {
            // Senha incorreta
            echo '<script>
            alert("Senha Incorreta! Tente Novamente.");
            window.location="login.php";
            </script>';
            exit;
        }
    } else {
        // Usuário não encontrado
            echo '<script>
            alert("CPF Inválido!");
            window.location="login.php";
            </script>';
            exit;
    }

    // Fecha a conexão com o banco de dados
    mysqli_close($conect);
}
?>
