<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];



    $email_from = 'info@empreendatur.com';
    $email_subject = 'Submissão de Formulário - EmpreendaTUR';
    $email_body = "Nome: $name.\n" .
                  "E-mail: $visitor_email.\n" . 
                  "Assunto: $subject.\n" . 
                  "Mensagem: $message.\n";

    $to = 'test@gmail.com';
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";


    mail($to, $email_subject, $email_body, $headers);

    header("Location: index.html");
?>