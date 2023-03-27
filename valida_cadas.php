<?php 

    include "database.php";

    $nome_cadas = $_POST['nome_cadas'];
    $password_cadas = $_POST['senha_cadas'];
    $rgm_cadas = $_POST['rgm_cadas'];
   
    $sql = "INSERT INTO ferias_login (f_nome, f_RGM, f_senha) 
    VALUES ('$nome_cadas', '$rgm_cadas', '$password_cadas')";

    if(mysqli_query($conexao, $sql)){
        header("Location: index.php");
    }
    else{
        echo "Falha ao cadastrar no banco de dados";
    }