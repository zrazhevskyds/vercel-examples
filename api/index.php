<?php
$to      = 'zrazhevskyds@yandex.ru';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: info@123-pied.vercel.app' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
