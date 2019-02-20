<?php

$nome = $_POST['nome'];
$empresa = $_POST['empresa'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];

$tudo = "Meu nome é ". $nome . "\t \n Minha empresa é ". $empresa . "\t \n Meu email é ". $email . "\t \n
     Meu telefone é ". $telefone . "\t \n A mensagem é " .$mensagem;

// emails para quem será enviado o formulário
  $emailenviar = "contato@powerestetica.com.br";
  $destino = $emailenviar;
  $assunto = "Contato pelo Site \t \n";
 
  // É necessário indicar que o formato do e-mail é html
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf8' . "\r\n";
$headers .= 'From: '.$email;

  mail($destino, $assunto, $tudo, $headers);
  




?>
