<?php 
require_once 'db_connect.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE from clientes WHERE id=$id";
    if (mysqli_query($connect , $sql)) {
        echo "O cliente foi removido do banco";
    }else{
        echo "Erro ao remover cliente!";
    }
}