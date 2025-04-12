<?php
$servidor = "localhost";
$banco = "contawatts";
$usuariobd = "root";
$senhabd = "";

$conect = new
mysqli($servidor,$usuariobd,$senhabd,$banco);
if($conect->connect_errno) {
    die("falha ao conectar: ".conect->connect_error);
}
?>