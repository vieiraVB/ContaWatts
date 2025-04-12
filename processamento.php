<?php
include 'conexao.php'; // Inclua o arquivo de configuração do banco de dados

// Iniciar a sessão
session_start();

// Verificar se o usuário está logado
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $actionType = $_POST['actionType'];
        $username = $conect->real_escape_string($username); // Evitar SQL Injection

        switch ($actionType) {
            case 'editNome':
                if (isset($_POST['nome'])) {
                    $novoNome = $conect->real_escape_string($_POST['nome']);
                    $sql = "UPDATE usuarios SET usernome='$novoNome' WHERE userusuario='$username'";
                }
                break;

            case 'editUsuario':
                if (isset($_POST['usuario'])) {
                    $novoUsuario = $conect->real_escape_string($_POST['usuario']);
                    $query_verificar_dados = "SELECT * FROM usuarios WHERE userusuario = '$novoUsuario'";
                    $resultado_verificar_dados = mysqli_query($conect, $query_verificar_dados);

                    // Se encontrar algum registro com o mesmo nome de usuário
                    if(mysqli_num_rows($resultado_verificar_dados) > 0) {
                        echo '<script>
                            alert("O nome de Usuário já está sendo utilizado. Por favor, utilize outro Usuário.");
                            window.location="perfiluser.php";
                            </script>';
                        exit; // Encerra o script para evitar processamento adicional
                    }
                    $sql = "UPDATE usuarios SET userusuario='$novoUsuario' WHERE userusuario='$username'";
                    $updateSession = true; // Sinaliza que precisamos atualizar a sessão
                }
                break;

            case 'editEmail':
                if (isset($_POST['email'])) {
                    $novoEmail = $conect->real_escape_string($_POST['email']);
                    $query_verificar_dados = "SELECT * FROM usuarios WHERE useremail = '$novoEmail'";
                    $resultado_verificar_dados = mysqli_query($conect, $query_verificar_dados);

                    // Se encontrar algum registro com o mesmo e-mail
                    if(mysqli_num_rows($resultado_verificar_dados) > 0) {
                        echo '<script>
                            alert("Email já cadastrado. Por favor, utilize outro e-mail.");
                            window.location="perfiluser.php";
                            </script>';
                        exit; // Encerra o script para evitar processamento adicional
                    }
                    $sql = "UPDATE usuarios SET useremail='$novoEmail' WHERE userusuario='$username'";
                }
                break;

            case 'editCPF':
                if (isset($_POST['cpf'])) {
                    $novoCPF = $conect->real_escape_string($_POST['cpf']);
                    if(!ctype_digit($novoCPF)) {
                        echo '<script>
                           alert("CPF Inválido! Digite apenas números.");
                           window.location="perfiluser.php";
                           </script>';
                        exit;
                    }
               
                    // Verifica se o CPF tem o número correto de caracteres
                    if(strlen($novoCPF) !== 11) {
                        echo '<script>
                           alert("CPF Inválido!");
                           window.location="perfiluser.php";
                           </script>';
                        exit;
                    }

                    $query_verificar_dados = "SELECT * FROM usuarios WHERE usercpf = '$novoCPF'";
                    $resultado_verificar_dados = mysqli_query($conect, $query_verificar_dados);

                    // Se encontrar algum registro com o mesmo CPF
                    if(mysqli_num_rows($resultado_verificar_dados) > 0) {
                        echo '<script>
                            alert("CPF já cadastrado. Por favor, utilize outro CPF.");
                            window.location="perfiluser.php";
                            </script>';
                        exit; // Encerra o script para evitar processamento adicional
                    }

                    $sql = "UPDATE usuarios SET usercpf='$novoCPF' WHERE userusuario='$username'";
                }
                break;

            default:
                echo "Ação inválida.";
                exit;
        }

        if (isset($sql) && $conect->query($sql) === TRUE) {
            // Atualizar a variável de sessão se o nome de usuário foi alterado
            if (isset($updateSession) && $updateSession === true) {
                $_SESSION['username'] = $novoUsuario;
            }
            echo '<script>
            alert("Alteração realizada com sucesso!");
            window.location="perfiluser.php";
            </script>';
        } else {
            echo "Erro ao atualizar dados: " . $conect->error;
        }
    }
} else {
    echo '<script>
            alert("O Usuário não está logado!");
            window.location="login.php";
            </script>';
}
?>