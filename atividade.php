<?php



?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto minhas Ferias</title>
    <link rel="stylesheet" href="atividade.css">
    <link rel="shortcut icon" href="form.ico"type="image/">
</head>
<body class="body-atividade">

    <header class="cabeçalho">
         <img src="logojaf.jpeg" class="logo-jaf" alt="Logo Colégio José Alves Feitosa">
        
        <section class="menu">
            <ul class="lista-menu">
                <li class="menu-li"> <strong> <a href="https://instagram.com/colegio.jaf?igshid=YmMyMTA2M2Y=" class="menu-link" target="_blank"> Instagram </a> </strong> </li>
                <li class="menu-li"> <strong> <a href="mailto:colegiojaf@gmail.com" class="menu-link" target="_blank"> E-mail </a> </strong> </li>
            </ul>
        </section>   
    </header> <!-- Cabeçalho -->

<main class="conteudo-atividade"> <!-- Corpo -->

      <form action="" method="POST" enctype="multipart/form-data" >
            <h1 class="titulo-atividade">PROJETO MINHAS FÉRIAS</h1> <br>
            <p class="texto-atividade">
                Descreva como foram as suas ferias em forma de video e texto em seu caderno.
                Para enviar sua atividade siga o passo a passo: <br> <br>
                1. Tire uma foto do seu caderno com a atividade, de maneira que o texto esteja visivel (Obrigatorio*).   <br>
                2. Grave um video contando como foram suas ferias (Obrigatorio para todos). <br>
                3. Adicione a foto da atividade na area "enviar foto"*. <br>
                4. Adicione o video na area "enviar video". <br>
                5. Veja se esta tudo certo e envie clicando botao "Terminar atividade". <br>
        
                <strong>*Obs.: a foto da atividade nao é obrigatoria para alunos com deficiencias que nao as permitem escrever.</strong> <br>
             </p>

            <video controls>
                <source src="videoexplicativo.mp4" type="video/mp4">
            </video> <br><br><br><br><br><br><br>
        </form>

        
<?php

            include('up.php');

?>
        
</main>

 
<footer>
    <h4 class="texto-footer">Todos os direitos reservados</h4> <br>
    <button class="btn-logo-cshark"><a href="https://instagram.com/cshark.programacao?igshid=YmMyMTA2M2Y=" target="_blank" class="link-btn-cshark"><img class="c-shark" src="cshark.png" alt="cshark-logo"></a></button>
    
    <h3 class="texto-footer">Desenvolvedores</h3> <br>

    <ul class="lista-devs">
        <li><a href="guilherme.php" target="_blank" class="link-footer">Guilherme Feitosa</a></li>
        <li><a href="miguel.php" target="_blank" class="link-footer">Miguel Macena</a></li>
        
    </ul>

</footer>
    
</body>
</html>
