<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];
    $msg_email = '';

    //1 – Definimos Para quem vai ser enviado o email
    $para = "alex11jgt@hotmail.com";
    //2 - resgatar o nome digitado no formulário e  grava na variavel $nome
    // 3 - resgatar o assunto digitado no formulário e  grava na variavel //$assunto
    //4 – Agora definimos a  mensagem que vai ser enviado no e-mail
    $msg_email = "<strong>Nome:  </strong>".$nome;
    $msg_email .= "<br/><strong>Email:  </strong>".$email;
    $msg_email .= "<br/><strong>Assunto:  </strong>".$assunto;
    $msg_email .= "<br/><strong>Mensagem: </strong>".$mensagem;

    //5 – agora inserimos as codificações corretas e  tudo mais.
    $headers =  "Content-Type:text/html; charset=UTF-8\n";
    $headers .= "From: $nome <$para> Reply-to: $email \n"; //Vai ser //mostrado que  o email partiu deste email e seguido do nome
   /* $headers .= "X-Sender:  <sistema@dominio.com.br>\n"; //email do servidor //que enviou
    $headers .= "X-Mailer: PHP  v".phpversion()."\n";
    $headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
    $headers .= "Return-Path:  <sistema@dominio.com.br>\n"; //caso a msg //seja respondida vai para  este email.*/
    $headers .= "MIME-Version: 1.0\n";

    mail($para, $assunto, $mensagem, $headers);  //função que faz o envio do email.

?>

<section class="contato-mensagem-container">

    <div class="contato-dados-container">
        <article class="container">
            <h4>Dados enviados com sucesso, abaixo seguem os dados que você enviou  (:</h4>
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