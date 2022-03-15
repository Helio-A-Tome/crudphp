<?php
require 'conexao.php';
if(isset($_GET['id'])&& empty($_GET['id'])==false){

    $id =addslashes($_GET['id']);

    $sql= "DELETE FROM usuarios WHERE id= '$id'";
    $pdo->query($sql);

    header("Location:index.php");

}else{

    echo 'erro ao apagar o registro';
    //header("Location:index.php");
}



?>