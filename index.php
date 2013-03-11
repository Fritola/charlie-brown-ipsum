<?php
    $submit_messages = array(
        'O côro vai comê!',
        'Vou te levar, yeah!',
        'Proibida pra mim, no way!',
        'Não deixe o mar te engulir!',
        'Eu confisco!'
    );

    $submit_message = $submit_messages[rand(0, count($submit_messages) - 1)];

    $paragrafos = (int) $_GET['paragrafos'];
    
    if ($paragrafos > 0) {
        $file = file_get_contents('./paragrafos.json');
        $data = json_decode($file, true);

        $result = array();
        for ($i = 0; $i < $paragrafos; $i++) {
            $result[] = $data[rand(0, count($data) - 1)];
        }
    }
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Gerador de Lorem Ipsum - Charlie Brown Ipsum</title>
    <meta name="description" content="O Charlie Brown Ipsum é um gerador de placeholder text (Lorem Ipsum). Pare de usar 'nonono' e 'lorem ipsum dolor sit' nos seus designs. Além disso o Charlie Brown Ipsum é minha pequena homenagem ao cantor brasileiro Alexandre Magno Abrão (1970-2013)">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="style.css">
    <script src=""></script>
</head>
<body>
    <div id="main">
        <img id="logo" src="logo-cbipsum.png">

        <div id="content">

            <form method="get">
                <?php if (count($result) > 0): foreach($result as $r): ?>
                    <p><?php echo($r); ?></p>
                <?php endforeach; endif; ?>
                <h1>Gerar um texto não tão complicado demais mas nem tão simples assim.</h1>

                <p>chega com <input type="text" id="paragrafos" name="paragrafos" value="5" maxlength="2"> paragrafos na minha quebrada!</p>

                <input type="submit" id="gerar" value="Gerar. <?php echo $submit_message;?>">
            </form>
            <!--  |  |  |  |  -->

            <div id="footer">
                <p>O Charlie Brown Ipsum é um gerador de placeholder text (Lorem Ipsum). Pare de usar "nonono" e "lorem ipsum dolor sit" nos seus designs! Além disso o Charlie Brown Ipsum é minha pequena homenagem ao cantor brasileiro Alexandre Magno Abrão (1970-2013)
                </p>

                <p>2013 - <a href="http://twitter.com/thiagooak" targer="_blank">@thiagooak</a> <br>
                    Crédito da Foto: Adptação do trabalho de 
                    <a href="https://secure.flickr.com/photos/murilocardoso/1809818245/" target="_blank">Murilo Cardoso</a>
                </p>
            </div>
        </div>
    </div>
</body>
</html>
