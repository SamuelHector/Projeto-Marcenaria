<?php

/* if(isset($_POST['email'])) && !empty($_POST['email']){  

$nome = addcslashes($_POST['name']);
$email  = addcslashes($_POST['email']);
$telefone  = addcslashes($_POST(['phone']));
$principalinteresse  = addcslashes($_POST(['interest']))


$to = "lemuasousa09@gmail.com";
$subject = "contato - Cliente moveis planejados";
$body = "nome: ".$nome. "\n".
        "nome: ".$nome. "\n".
        "phone: ".$telefone. "\n".
        "interest: ".$principalinteresse. "\n".

$header = "planejadoscom@gmail.com". "\r\n".
          "reply-to:". $email. "\e\n". 
          "X=Mailer:PHP/". phpversion();.




if(mail($to,$subject,$body,$header)){
    echo("Email enviado com sucesso!");
}else {
    echo("Email não pode ser enviado");
}

}
 */



<?php
  Variáveis
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $data_envio = date('d/m/Y');
  $hora_envio = date('H:i:s');

  Compo E-mail
  $arquivo = "
    <html>
      <p><b>Nome: </b>$nome</p>
      <p><b>E-mail: </b>$email</p>
      <p><b>phone: </b>$phone</p>
      <p>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></p>
    </html>
  ";
  
  Emails para quem será enviado o formulário
  $destino = "vitorkhaled47@gmail.com";
  $assunto = "Contato pelo Site";

  Este sempre deverá existir para garantir a exibição correta dos caracteres
  $headers  = "MIME-Version: 1.0\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\n";
  $headers .= "From: $nome <$email>";

  Enviar
  mail($destino, $assunto, $arquivo, $headers);
  
  echo "<meta http-equiv='refresh' content='10;URL=../index.html'>";
?> 


?>

