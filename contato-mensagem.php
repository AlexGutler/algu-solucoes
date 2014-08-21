<?php require_once('header.php');
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];
?>

<section class="contato-mensagem-container">

    <div class="contato-dados-container">
        <article class="container">
            <h4>Dados enviados com sucesso, abaixo seguem os dados que você enviou</h4>
        </article>
    </div>

    <div class="contato-form-dados-container">
        <div class="container">

            <form class="form-horizontal" role="form">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Nome</label>
                    <div class="col-sm-10">
                        <p class="form-control-static"><?php echo $nome; ?></p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <p class="form-control-static"><?php echo $email; ?></p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Assunto</label>
                    <div class="col-sm-10">
                        <p class="form-control-static"><?php echo $assunto; ?></p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Mensagem</label>
                    <div class="col-sm-10">
                        <p class="form-control-static"><?php echo $mensagem; ?></p>
                    </div>
                </div>
            </form>

        </div>
    </div>
</section>


<?php require_once('footer.php') ?>
