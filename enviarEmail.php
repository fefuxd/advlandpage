 <?php
  //1 – Definimos Para quem vai ser enviado o email
  $para = "contato@soluticom.com.br";
  //2 - resgatar o nome digitado no formulário e  grava na variavel $nome
  $nome = $_POST['nome'];
  // 3 - resgatar o assunto digitado no formulário e  grava na variavel //$assunto
  $assunto = $_POST['email'];
   //4 – Agora definimos a  mensagem que vai ser enviado no e-mail
  $mensagem = "<strong>Nome:  </strong>".$nome;
  $mensagem .= "<br>  <strong>Email: </strong>".$email;
  $mensagem .= "<br>  <strong>Mensagem: </strong>".$_POST['mensagem'];

//5 – agora inserimos as codificações corretas e  tudo mais.
  $headers =  "Content-Type:text/html; charset=UTF-8\n";
  $headers .= "From:  soluticom.com.br<contato@soluticom.com.br>\n"; //Vai ser //mostrado que  o email partiu deste email e seguido do nome
  $headers .= "X-Sender:  <contato@soluticom.com.br>\n"; //email do servidor //que enviou
  $headers .= "X-Mailer: PHP  v".phpversion()."\n";
  $headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
  $headers .= "Return-Path:  <contato@soluticom.com.br>\n"; //caso a msg //seja respondida vai para  este email.
  $headers .= "MIME-Version: 1.0\n";

$status = mail($para, $assunto, $mensagem, $headers);  //função que faz o envio do email.

 if($status) {
        echo '
							<script type="text/JavaScript">
							alert("E-mail enviado com sucesso!");
							location.href="index.php"
							</script>
							'; //verifica se foi enviado o email com sucesso.
    }
    else {
         echo '
							<script type="text/JavaScript">
							alert("Ocorreu um erro ao enviar o email. Entre em contato pelo nosso telefone (19) 3042-7430");
							location.href="index.php"
							</script>
							';
    }

  ?>