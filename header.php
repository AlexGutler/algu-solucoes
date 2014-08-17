<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title> Algu Soluções - Curso PHP Code-Education </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.5">

    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="imagens/icons/favicon.ico">

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

<header class="topo-container">
    <div class="navbar-wrapper">
        <div class="container-fluid">
            <nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
                <div class="container">

                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><img src="imagens/logo/ag-icon-v.1.1.1.png" height="50px" width="auto"/>Algu Soluções</a> <!-- Algu Soluções -->
                    </div>

                    <div class="collapse navbar-collapse" id="navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li ><a href="#">Home</a></li> <!-- class="active" -->
                            <li><a href="#">Empresa</a></li>
                            <li><a href="#">Produtos</a></li>
                            <li><a href="#">Serviços</a></li>
                            <li><a href="#">Contato</a></li>
                        </ul>
                    </div>

                </div>
            </nav>
        </div>
    </div>
</header>
<hr/>
<? require_once('footer.php') ?>