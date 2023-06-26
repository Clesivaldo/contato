<?php

$Nome 		= $_POST['Nome'].' '.$_POST['Sobrenome'];
$Email 		= $_POST['Email'];
$Assunto 	= $_POST['Assunto'];
$Mensagem 	= $_POST['Mensagem'];
$From		= 'diegosantos2288@hotmail.com';

$Headers      = "MIME-Version: 1.1\n";
$Headers     .= "Content-type: text/html; charset=utf-8\n";
$Headers     .= "From: Meu Site <$From>\n";
$Headers     .= "Return-Path: $From\n";
$Headers     .= "Reply-to: $Email\n";

mail($Email, $Assunto, $Mensagem, $Headers, $From);
header('Location:obrigado.php');	

?>