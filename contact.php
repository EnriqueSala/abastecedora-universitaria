<?php
    $to = 'sala488@gmail.com';
    $subject = "From: htmlspecialchars($_POST['username']) <htmlspecialchars($_POST['subject'])>\r\n";
    $message = "Reply-To: htmlspecialchars($_POST['message']) \r\n";
    $headers = "Content-type: text\r\n";
    mail($to, $subject,, $message, $headers);
?>