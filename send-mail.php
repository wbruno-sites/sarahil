<?php

if( $_SERVER['REQUEST_METHOD']=='POST' ) {
  $to             = 'wbrunom@gmail.com'; //para quem vai o email
  $subject        = 'Contato site Sarahil';


  $message =
  '<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
  <style>
  </style>'.
  '<img src="http://sarahil.profissional.ws/images/logo.png" alt="" />'.
  'Olá, <b>'.$_POST['name'].'</b><br><br>'.
  'Mandou a seguinte mensagem pela seção "Contato" do site: <br>'.
  nl2br($_POST['message']).
  '<br><br>E deixou o seguinte telefone para contato:<b>'.$_POST['phone'].'</b>'.
  '<br>e email:<b>'.$_POST['email'].'</b>';


  $headers = "MIME-Version: 1.1".PHP_EOL;
  $headers .= "Content-type: text/html; charset=iso-8859-1".PHP_EOL;
  $headers .= "From: no-reply@sarahil.profissional.ws".PHP_EOL; // remetente
  $headers .= "Return-Path: no-reply@sarahil.profissional.ws".PHP_EOL; // return-path


  mail($to, $subject, $message, $headers);
  header("Location: /contato.html?send=ok");
}
