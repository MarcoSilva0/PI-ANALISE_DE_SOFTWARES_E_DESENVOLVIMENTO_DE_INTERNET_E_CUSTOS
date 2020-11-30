<?php
$destinatario = "marcoantonio02016@outlook.com";
$assunto = "Orçamento";


$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$qtde = $_REQUEST['qtde'];
$js = $_REQUEST['js'];
$complexibilidade = $_REQUEST['layout'];
$prazo = $_REQUEST['prazo'];

 // monta o e-mail na variavel $body

$body = "===================================" . "\n";
$body = $body . "FALE CONOSCO - TESTE COMPROVATIVO" . "\n";
$body = $body . "===================================" . "\n\n";
$body = $body . "Nome: " . $nome . "\n";
$body = $body . "Email: " . $email . "\n";
$body = $body . "Quantidade:" . $qtde . "\n";
$body = $body . "Dificuldade: " . $complexibilidade . "\n";
$body = $body . "Prazo: " . $prazo . "\n";
$body = $body . "===================================" . "\n";

// envia o email
mail($destinatario, $assunto , $body, "From: $email\r\n");

// redireciona para a página de obrigado
header("location:orcamento.html");
