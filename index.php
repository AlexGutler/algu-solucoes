<?php
    $url  = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

    $rota = explode('/',$url['path'],2);

    function rotas($param) {
        $minhasRotas = array("contato","empresa","home","produtos","servicos","contato-mensagem");
        if(in_array($param[1], $minhasRotas)){
            require_once($param[1].'.php');
        } elseif ($param[1] == ""){
            require_once('home.php');
        } else {
            require_once('404.php');
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title> Algu Soluções - Curso PHP Code-Education </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.5">

    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="imagens/icons/favicon.ico">

    <meta name="description" content="Algu Soluções - Soluções em Sistemas, Webdesign e Tecnologia" />
    <meta name="keywords" content="Algu Soluções, sistemas, design, webdesign, redes sociais, tecnologia,"/>

    <!-- Bootstrap & CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">

    <!-- Javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
</head>

<body>

    <?php require_once('header.php');?>

    <div>
        <?php rotas($rota); ?>
    </div>

    <?php require_once('footer.php');?>

</body>
</html>