<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['envia-adv'])) {
  
  //Variaveis de POST, Alterar somente se necessário 
  //====================================================
  $nome = $_POST['nome'];
  $email = $_POST['mail'];
  $telefone = $_POST['tel'];
  $cidade = $_POST['cidade'];
  $oab = $_POST['oab'];
  $tipo_processo = $_POST['tipoprocesso']
  //====================================================
  
  //REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
  //==================================================== 
  $email_remetente = "certjud@certjud.com.br"; // deve ser uma conta de email do seu dominio 
  //====================================================
  
  //Configurações do email, ajustar conforme necessidade
  //==================================================== 
  $email_destinatario = "contato@certjud.com.br"; // pode ser qualquer email que receberá as mensagens
  $email_reply = "$email"; 
  $email_assunto = "Contato de Cliente"; // Este será o assunto da mensagem
  //====================================================
  
  //Monta o Corpo da Mensagem
  //====================================================
  $email_conteudo = "Nome = $nome \n"; 
  $email_conteudo .= "Email = $email \n";
  $email_conteudo .= "Telefone = $telefone \n";
  $email_conteudo .= "Cidade = $cidade \n";
  $email_conteudo .= "Número OAB = $oab \n";
  //====================================================
  
  //Seta os Headers (Alterar somente caso necessario) 
  //==================================================== 
  $email_headers = 
    implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Subject: $email_assunto","Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
  //====================================================
  
  //Enviando o email 
  //==================================================== 
  if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)) {  
    header("Location: http://certjud.com.br/?sent=true");
    exit();
  } else {
    header("Location: http://certjud.com.br/?sent=false");
    exit();
  } 
  //====================================================
  
} 
?>
