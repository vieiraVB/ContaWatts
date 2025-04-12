<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v5.9.18, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.9.18, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>CTWT</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="assets3/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets3/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
  <link rel="stylesheet" href="assets3/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets3/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets3/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets3/dropdown/css/style.css">
  <link rel="stylesheet" href="assets3/socicon/css/styles.css">
  <link rel="stylesheet" href="assets3/theme/css/style.css">
  <link rel="stylesheet" href="estilos/styleuser.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Epilogue:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Epilogue:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
  <link rel="preload" as="style" href="assets3/mobirise/css/mbr-additional.css?v=fTI2vL"><link rel="stylesheet" href="assets3/mobirise/css/mbr-additional.css?v=fTI2vL" type="text/css">

  
  
  
</head>
<body>

<section data-bs-version="5.1" class="menu menu1 cid-sFGzlAXw3z" once="menu" id="menu1-2">
    

<nav class="navbar navbar-dropdown navbar-expand-lg">
        <div class="container-fluid">
            <div class="navbar-brand">
                
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white text-primary display-5" href="index3.php#top">CTWT</a></span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-white text-primary display-4" href="index3.php">Inicio</a></li></ul>
                
                <?php
                    session_start();
                    if(isset($_SESSION['username'])) {
                        $username = $_SESSION['username'];
                        echo '<div class="navbar-buttons mbr-section-btn"><a class="btn btn-primary display-4" name="botaouser" id="botaouser">' . $username . '<span class="mbrib-user mbr-iconfont mbr-iconfont-btn"></span></a></div>';
                    } else {
                        // Botão padrão se o usuário não estiver logado
                        echo '<div class="navbar-buttons mbr-section-btn"><a class="btn btn-primary display-4" name="botaouser" id="botaouser"> <span class="mbrib-user mbr-iconfont mbr-iconfont-btn"></span></a></div>';
                    } 
                ?>
            </div>
        </div>
    </nav>
</section>

<section id=conteudo>
    <h3 class="tituloConteudo">Dados do Usuário</h3>

    <div class="dadosDoUser">
        <?php
            include 'conexao.php'; // Inclua o arquivo de configuração do banco de dados

            // Verifica se o usuário está logado
            if(isset($_SESSION['username'])) {
                
                $nomeUsuario = $_SESSION['username'];

            // Consulta SQL para obter os dados do usuário com base no nome de usuário
                $sql = "SELECT * FROM usuarios WHERE userusuario = '$username'";
                $result = $conect->query($sql);

            // Verifica se a consulta retornou resultados
            if ($result->num_rows > 0) {
                // Extrai os dados do usuário
                $row = $result->fetch_assoc();
                // Exibe os dados do usuário
                echo '<p><strong>Nome:</strong> ' . $row['usernome'] . ' <a href="#" id="botaoeditnome"><i class="fas fa-edit"></i></a> ' . '</p>' . '<br>';
                echo '<p><strong>Nome De Usuario:</strong> ' . $row['userusuario'] . ' <a href="#" id="botaoeditusuario"><i class="fas fa-edit"></i></a>   ' . '</p>' . '<br>';     
                echo '<p><strong>Email:</strong> ' . $row['useremail'] . ' <a href="#" id="botaoeditemail"><i class="fas fa-edit"></i></a>   ' . '</p>' . '<br>';
                echo '<p><strong>CPF:</strong> ' . $row['usercpf'] . ' <a href="#" id="botaoeditcpf"><i class="fas fa-edit"></i></a>   ' . '</p>' . '<br>';
            } else {
                echo "Usuário não encontrado.";
            }
            } else {
            // Botão padrão se o usuário não estiver logado
                echo '<div class="navbar-buttons mbr-section-btn"><a class="btn btn-primary display-4" name="botaouser" id="botaouser"> <span class="mbrib-user mbr-iconfont mbr-iconfont-btn"></span></a></div>';
            }
        ?>

    </div>
</section>

<section>
    <div class=copyright>
         <p class="conteudocopy">© Copyright 2024 Café c/ Leite - Todos os Direitos Reservados</p>
     </div>
</section>

<section id="barralateral">
    <div id="sidebar" class="sidebar">
        <a href="javascript:void(0)" class="closeBtn" id="closeBtn">&times;</a>
            <?php
                // Verifica se o usuário está logado
                if(isset($_SESSION['username'])) {
                    $username = $_SESSION['username'];
    
                // Consulta SQL para obter os dados do usuário com base no nome de usuário
                    $sql = "SELECT * FROM usuarios WHERE userusuario = '$username'";
                    $result = $conect->query($sql);
    
                // Verifica se a consulta retornou resultados
                if ($result->num_rows > 0) {
                    // Extrai os dados do usuário
                    $row = $result->fetch_assoc();
                    echo '<h3 id="usuario">' . $row['userusuario'] . '<h3>';
                }
            }
            ?>
            <br>
        <p id="funcoes"><a href="perfiluser.php">Configurações do Perfil</a></p>
        <p id="funcoes"><a href="calculadora.php">Calculadora de Gastos</a></p>

        <form action="logout.php">
            <p id="sair"><button id="botaosair" type="submit">Sair</button></p>
        </form>
    </div>
    <script src="scripts/script.js"></script>

</section>

<section id="edicaonome">
    <div id="editnome" class="editnome">
        <form action="processamento.php" method="post" id="formularioNome">
            <a href="javascript:void(0)" class="closeBtnnome" id="closeBtnnome">&times;</a>
            <h3 id="tituloedit">Novo Nome:</h3>
            <br>
            <div class="col-lg-12 col-md col-12 form-group mb-3" data-for="name">
                <input type="text" name="nome" placeholder="Nome" data-form-field="name" class="form-control" value="" id="name-form4-1" onkeyup="mudarFonte(this)">
            </div>
            <input type="hidden" name="actionType" value="editNome">
            <button type="submit" name="enviar" id="botaoedit" class="btn btn-success display-4">Enviar</button>
        </form>
    </div>

    <script src="scripts/script.js"></script>

</section>

<section id="edicaousuario">
    <div id="editusuario" class="editusuario">
        <form action="processamento.php" method="post" id="formularioUsuario">
            <a href="javascript:void(0)" class="closeBtnusuario" id="closeBtnusuario">&times;</a>
            <h3 id="tituloedit">Novo Username:</h3>
            <br>
            <div class="col-lg-12 col-md col-12 form-group mb-3" data-for="name">
                <input type="text" name="usuario" placeholder="Usuário" data-form-field="name" class="form-control" value="" id="name-form4-1" onkeyup="mudarFonte(this)">
            </div>
            <input type="hidden" name="actionType" value="editUsuario">
            <button type="submit" name="enviar" id="botaoedit" class="btn btn-success display-4">Enviar</button>
        </form>
    </div>
    <script src="scripts/script.js"></script>

</section>

<section id="edicaoemail">
    <div id="editemail" class="editemail">
        <form action="processamento.php" method="post" id="formularioEmail">
            <a href="javascript:void(0)" class="closeBtnemail" id="closeBtnemail">&times;</a>
            <h3 id="tituloedit">Novo Email:</h3>
            <br>
            <div class="col-lg-12 col-md col-12 form-group mb-3" data-for="name">
                <input type="email" name="email" placeholder="Email" data-form-field="name" class="form-control" value="" id="name-form4-1" onkeyup="mudarFonte(this)">
            </div>
            <input type="hidden" name="actionType" value="editEmail">
            <button type="submit" name="enviar" id="botaoedit" class="btn btn-success display-4">Enviar</button>
        </form>
    </div>
    <script src="scripts/script.js"></script>

</section>

<section id="edicaocpf">
    <div id="editcpf" class="editcpf">
        <form action="processamento.php" method="post" id="formularioCPF">
            <a href="javascript:void(0)" class="closeBtncpf" id="closeBtncpf">&times;</a>
            <h3 id="tituloedit">Novo CPF:</h3>
            <br>
            <div class="col-lg-12 col-md col-12 form-group mb-3" data-for="name">
                <input type="text" name="cpf" placeholder="CPF" data-form-field="name" class="form-control" value="" id="name-form4-1" onkeyup="mudarFonte(this)">
            </div>
            <input type="hidden" name="actionType" value="editCPF">
            <button type="submit" name="enviar" id="botaoedit" class="btn btn-success display-4">Enviar</button>
        </form>
    </div>
    
    <script src="scripts/script.js"></script>

</section>
</body>
</html>