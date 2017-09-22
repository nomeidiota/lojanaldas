<?php
//enviar

// emails para quem ser� enviado o formul�rio
$emailenviar = "juliacristinap.santos@gmail.com";
$destino = $emailenviar;
$assunto = $_POST['assunto'];

// � necess�rio indicar que o formato do e-mail � html
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: $nome <$email>';
//$headers .= "Bcc: $EmailPadrao\r\n";

$enviaremail = mail($destino, $assunto, $arquivo, $headers);
if($enviaremail){
    echo "<script> alert('E-MAIL ENVIADO COM SUCESSO! <br>
     O link será enviado para o e-mail fornecido no formulário');</script>";
} else {
  echo "<script> alert('Erro ao Enviar email, tente novamente!')</script>";

}
?>
