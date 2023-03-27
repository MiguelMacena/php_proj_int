<?php

include ('database.php');

if (isset($_POST['rgm_login']) || isset($_POST['senha_login'])) 
{

    if(strlen($_POST['rgm_login']) == 0) {
        echo "Preencha o campo Login";
}else if (strlen($_POST['senha_login']) == 0) {
        echo "Preencha o campo Senha";
}
    else 
{ 

}
        $login= $conexao->real_escape_string($_POST['rgm_login']);
        $senha= $conexao->real_escape_string($_POST['senha_login']);

        $sql_code= "SELECT * FROM   ferias_login WHERE f_RGM = '$login' AND f_senha='$senha' ";
        $sql_query = $conexao -> query($sql_code) or die ("Falha na execução do código SQL:" .$conexao->error);

        $quantidade= $sql_query->num_rows;

        if ($quantidade ==1)
{
            $usuario= $sql_query->fetch_assoc();

            if (isset($_SESSION))
{
                session_start();
}

            
            $_SESSION['nome'] =$usuario['nome'];
            $_SESSION['senha']= $usuario['id'];

            header("Location: atividade.php");
}
        else 
{
            echo"E-mail ou senha incorreta, por favor tente novamente!!";
}
}
