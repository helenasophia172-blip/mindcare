<?php

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



$mail = new PHPMailer(true);

    //gerãção de número aleatório para teste
    $codigo = random_int(100000, 999999);

    
    $email = 'usuario@aluno.cps.sp.gov.br'; //coloque aqui o endereço de e-mail do usuário para teste
   
    
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'codigo.tcc@gmail.com'; //coloque aqui sua conta gmail
            $mail->Password = 'usgilokjikacndhk'; //coloque aqui a senha de aplicativo de 16 bits da sua conta
            $mail->Port = 465;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    
            $mail->setFrom('codigo.tcc@gmail.com', 'Recuperar Senha'); //coloque aqui sua conta gmail
            $mail->addAddress($email);
            $mail->addReplyTo('codigo.tcc@gmail.com', 'Suporte');
    
            $mail->isHTML(true);
            $mail->Subject = 'Codigo para troca de Senha';
            $mail->Body    = "Seu codigo eh: <strong>$codigo</strong>";
            $mail->AltBody = "Seu codigo eh: $codigo";
    
            if ($mail->send()) {
                echo "<script>alert('Código enviado com sucesso!');</script>";
                exit;
            } else {
                echo "<script>alert('Erro ao enviar o e-mail.');</script>";
                exit;
            }
      
       
?>