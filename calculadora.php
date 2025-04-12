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
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="assets3/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets3/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
  <link rel="stylesheet" href="assets3/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets3/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets3/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets3/dropdown/css/style.css">
  <link rel="stylesheet" href="assets3/socicon/css/styles.css">
  <link rel="stylesheet" href="assets3/theme/css/style.css">
  <link rel="stylesheet" href="estilos/stylecalculadora.css">
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
                include 'conexao.php';
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

<section id="conteudo">
    <h3 id="tituloConteudo">Calculadora de Gastos</h3>

        <h5 id="tituloAparelhos">Meus Aparelhos:</h5>
            <div id="aparelhosCad">
                <style>
                    #aparelhosCad {
                        display: flex;
                        flex-wrap: wrap;
                        gap: 20px; /* Espaçamento entre as caixas e o botão */
                        margin-top: 20px;
                    }

                    .aparelho-box {
                        background-color: #353535;
                        width: 18%;
                        border-radius: 5px;
                        min-height: 200px;
                        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
                        padding: 10px;
                        box-sizing: border-box;
                        display: flex;
                        flex-direction: column;
                        align-items: center;
                        justify-content: center;
                        text-align: center;
                        color: #fafafa;
                        font-family: "Jost", sans-serif;
                        font-weight: 600;
                        margin-left: 25px;
                    }

                    .aparelho-box h5 {
                        padding-top: 10px; 
                    }

                    .aparelho-box p {
                        margin-top: 10px;
                        margin-bottom: 10px;
                    }

                    .aparelho-box p + p {
                        margin-top: 5px; /* Espaçamento específico entre os parágrafos */
                    }

                    .btn-with-icon{
                        background:none;
                        width: 0%;
                        height: 0%;
                        display: flex;
                        align-items: center;
                        padding-top: 50px;
                    }

                    .material-icons {
                        font-size: 50px;
                        color: #232323;
                        border-radius: 10px;
                        background-color: #fafafa;
                        padding: 5px;
                        margin:0;
                        transition: 300ms;
                    }

                    .material-icons:hover {
                        color: #fafafa;
                        background-color: #232323;
                    }

                    .pAviso{
                        background-color: #353535;
                        width: 18%;
                        border-radius: 5px;
                        min-height: 200px;
                        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
                        padding: 10px;
                        box-sizing: border-box;
                        display: flex;
                        flex-direction: column;
                        align-items: center;
                        justify-content: center;
                        text-align: center;
                        color: #fafafa;
                        font-family: "Jost", sans-serif;
                        font-weight: 600;
                        margin-left: 25px;
                    }
                    
                    .delete-icon {
                        margin-top: 10px;
                        cursor: pointer;
                        font-size: 24px;
                        color: #ff0000;
                    }

                    .delete-icon:hover {
                        color: #ff8080;
                    }

                </style>
                <?php
                    
                    include("conexao.php");
                    
                    $nomeUsuario = $_SESSION['username'];

                    $sql = "SELECT id FROM usuarios WHERE userusuario = '$nomeUsuario'";
                    $resultado = $conect->query($sql);

                    if ($resultado->num_rows > 0) {
                        
                        $linha = $resultado->fetch_assoc();
                        $idUsuario = $linha['id'];

                        $query_aparelhos = "SELECT apanome, ((apapotencia) * (apahorasdia * apadiasuso)/1000) * valortarifa AS 'preco', apaid, apadiasuso FROM aparelhos WHERE apauserid = $idUsuario";
                        $resultado_aparelhos = mysqli_query($conect, $query_aparelhos);

                        if (mysqli_num_rows($resultado_aparelhos) > 0) {
                            
                            while ($row = mysqli_fetch_assoc($resultado_aparelhos)) {
                                
                                echo '<div class="aparelho-box" data-id="' . $row["apaid"] . '">';
                                echo '<h5><strong>' . $row["apanome"] . '</strong></h5>';
                                echo '<p>Dias de uso: ' . $row["apadiasuso"] . ' dias.</p>';
                                echo '<p>Gastos Calculados: R$ ' . number_format($row["preco"], 2, ',', '.') . '</p>';
                                echo '<span class="material-icons delete-icon" onclick="removeAparelho(' . $row["apaid"] . ')">delete</span>';
                                echo '</div>';
                            }
                        } else {
                            echo '<p class="pAviso">Nenhum aparelho cadastrado para este usuário.</p>';
                        }
                    }
                ?>
                <button type="button" id="novoAparelho" class="btn-with-icon">
                    <span class="material-icons">add_circle_outline</span> 
                </button>
            </div>
            <script>
                function removeAparelho(aparelhoId) {
                    if (confirm('Tem certeza que deseja remover este aparelho?')) {
                        var xhr = new XMLHttpRequest();
                        xhr.open("POST", "remove_aparelho.php", true);
                        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                        xhr.onreadystatechange = function () {
                            if (xhr.readyState === 4 && xhr.status === 200) {
                                var response = JSON.parse(xhr.responseText);
                                if (response.success) {
                                    var aparelhoBox = document.querySelector('.aparelho-box[data-id="' + aparelhoId + '"]');
                                    aparelhoBox.parentNode.removeChild(aparelhoBox);
                                } else {
                                    alert('Erro ao remover o aparelho.');
                                }
                            }
                        };
                        xhr.send("id=" + aparelhoId);
                    }
                }
    </script>
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
    <script src="scripts/scriptcalc.js"></script>

</section>

<section id="janelaDeCalc">
    <div id="calc" class="calc">
        <a href="javascript:void(0)" class="closeBtncalc" id="closeBtncalc">&times;</a>
        <h3 id="novoApTitulo">Novo Aparelho:</h3>
        <form action="cadastroAparelho.php" method="POST" id="aparelhoForm">
            <div class="form-row full-width">
                <label for="nome">Nome do Aparelho:</label>
                <input type="text" id="nome" name="nome" >
            </div>
            <div class="form-row">
                <label for="nome">Valor da Tarifa:</label>
                <input type="double" id="tarifa" name="tarifa">
            </div>
            <div class="form-row">
                <label for="potencia">Potência (W):</label>
                <input type="double" id="potencia" name="potencia" >
            </div>
            <div class="form-row">
                <label for="horas">Horas de uso por dia:</label>
                <input type="double" id="horas" name="horas">
            </div>
            <div class="form-row">
                <label for="dias">Dias de uso por mês:</label>
                <input type="number" id="dias" name="dias">
            </div>
            <button id="adicionarAparelho" name="adicionarAparelho">Adicionar Aparelho</button>
            
        </form>
    </div>
    <script src="scripts/scriptcalc.js"></script>
</section>


</body>
</html>