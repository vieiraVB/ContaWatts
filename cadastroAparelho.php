<?php
session_start();

// Verificar se os dados do formulário foram enviados
if(isset($_POST['adicionarAparelho'])) {
    // Recuperar os dados do formulário
    $nome = $_POST["nome"];
    $tarifa = $_POST["tarifa"];
    $potencia = $_POST["potencia"];
    $horas = $_POST["horas"];
    $dias = $_POST["dias"];

    // Recuperar o nome do usuário
    $nomeUsuario = $_SESSION['username'];

    // Consultar o banco de dados para obter o ID do usuário
    include("conexao.php");

    // Consulta SQL para obter o ID do usuário
    $sql = "SELECT id FROM usuarios WHERE userusuario = '$nomeUsuario'";
    $resultado = $conect->query($sql);

    // Verificar se a consulta foi bem-sucedida
    if ($resultado->num_rows > 0) {
        // Extrair o ID do resultado da consulta
        $linha = $resultado->fetch_assoc();
        $idUsuario = $linha['id'];

        // Inserir os dados do aparelho no banco de dados
        $query_inserir = "INSERT INTO aparelhos (apaid, apanome, apapotencia, apahorasdia, apadiasuso, valortarifa, apauserid) VALUES (NULL, '$nome', '$potencia', '$horas', '$dias', '$tarifa', $idUsuario)";
        $resultado_inserir = mysqli_query($conect, $query_inserir);

        // Verificar se a inserção foi bem-sucedida
        if($resultado_inserir) {
            echo '<script>
            alert("Cadastro realizado com sucesso!");
            window.location="calculadora.php";
            </script>';
        } else {
            echo '<script>
            alert("Erro ao cadastrar. Por favor, tente novamente.");
            window.location="calculadora.php";
            </script>';
        }
    } else {
        echo '<script>
        alert("Usuário não encontrado. Por favor, faça login novamente.");
        window.location="login.php";
        </script>';
    }

    // Fechar a conexão com o banco de dados
    $conexao->close();
} else {
    // Redirecionar de volta para a página do formulário se o formulário não foi enviado
    header("Location: cadastroAparelho.php");
    exit();
}
?>