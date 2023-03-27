<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="main.css">


</head>
<body>
    
<div class="box">
            <form action="valida_login.php" method="post">
                <h1 class="titulo-form"> BEM-VINDO </h1> <br> <!-- Título Bem-Vindo  -->
                
                <p class="texto-login"> <strong> RGM: </strong> </p> <input type="text" name="rgm_login" > <br> <br> <!-- RGM -->
                <p class="texto-login"> <strong> SENHA: </strong> </p> <input type="password" name="senha_login" > <br> <br> <!-- Senha -->
                <strong> <input type="submit" class="enviar-login" value="ENTRAR"> </strong> <br> <br>
                <label for=""> <strong> <a href="form_cadastro.php" class="cadastrar-login" target="_blank"> Cadastre-se </a> </strong> </label> <br> <br>
            </form>
</div>

</body>
</html>