<?php

    include ('database.php');

?>


<?php

include ('database.php');

 
 if(isset($_FILES['foto'])) {
    $arquivo = $_FILES['foto'];

    if($arquivo['error'])
        die("Falha ao enviar o arquivo");

    if ($arquivo['size'] > 8097152)
        die ("O arquivo ultrpassa o limite !! Limite MAximo de 8MB");

    $pasta= "arquivos/";
    $nomedoarquivo = $arquivo['name'];
    $novonomedoarquivo = uniqid(); 
    $extensao = strtolower(pathinfo($nomedoarquivo,PATHINFO_EXTENSION));  
    
    if ($extensao != "jpg" && $extensao != "png")
        die("Desculpe, esse tipo de arquivo não pode ser aceito pelo sistema");

     $path = $pasta . $novonomedoarquivo . "." . $extensao;

    $deu_certo = move_uploaded_file($arquivo["tmp_name"], $path);
    if($deu_certo) {

        $conexao->query("INSERT INTO ferias_upload ( f_u_nome , f_path) VALUES ('$nomedoarquivo','$path')")  or die($conexao->error);    
        echo "<p> Arquivo enviado com sucesso! </p>";
        
}else
        echo "<p> Falha ao Enviar o Arquivo";
}

if(isset($_FILES['video'])) {
    $arquivo = $_FILES['video'];

    if($arquivo['error'])
        die("Falha ao enviar o arquivo");

    if ($arquivo['size'] > 8097152)
        die ("O arquivo ultrpassa o limite !! Limite MAximo de 8MB");

    $pasta= "arquivos/";
    $nomedoarquivo = $arquivo['name'];
    $novonomedoarquivo = uniqid(); 
    $extensao = strtolower(pathinfo($nomedoarquivo,PATHINFO_EXTENSION));  
    
    if ($extensao != "mp4" && $extensao != "avi")
        die("Desculpe, esse tipo de arquivo não pode ser aceito pelo sistema");

     $path = $pasta . $novonomedoarquivo . "." . $extensao;

    $deu_certo = move_uploaded_file($arquivo["tmp_name"], $path);
    if($deu_certo) {

        $conexao->query("INSERT INTO ferias_upload ( f_u_nome , f_path) VALUES ('$nomedoarquivo','$path')")  or die($conexao->error);    
        echo "<p> Arquivo enviado com sucesso! </p>";
        
}else
        echo "<p> Falha ao Enviar o Arquivo";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="form.css">

</head>
<body>
    
<center>

<form method="POST" enctype="multipart/form-data" action="">
<label class="label-ft">Enviar foto
<input type="file" name="foto" class="enviar-file" >
</label>
<br>
<label class="label-video">Enviar video
<input type="file" name="video" class="enviar-file">
</label>
<br>
<br>
<button name="upload" type="submit" class="enviar-atividade"> Terminar Atividade </button>


</form>

</center>

</html>

</body>