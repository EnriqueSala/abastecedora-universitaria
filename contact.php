<?php
    $to = 'sala488@gmail.com';
    $subject = htmlspecialchars($_POST['subject']);
    $name = htmlspecialchars($_POST['username']);
    $message = htmlspecialchars($_POST['message']);
    $formcontent = "From: $name \n Message: $message";
    $email = htmlspecialchars($_POST['email']);
    $headers = "From: $email \r\n";
    $headers .= "Reply-To: $email \r\n";
    $headers .= "Content-type: text/plain";
    if(mail($to, $subject, $formcontent, $headers)){
        header("Location: http://www.abastecedorauniversitaria.com/mail-sent.html"); /* Redirect browser */
        exit();
    }else{
        echo "<h1>Something went wrong</h1>";
    }
    ?>