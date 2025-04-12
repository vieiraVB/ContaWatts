<?php
include("conexao.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $aparelhoId = intval($_POST['id']);

    $sql = "DELETE FROM aparelhos WHERE apaid = $aparelhoId";

    if ($conect->query($sql) === TRUE) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false]);
    }
}
?>