<?php

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "vera@vms.com.ar";
    $headers = "From: " . $mailFrom;
    $txt = "Recibiste un mail de " . $name . "a traves de la página de VMS.\n\n" . $message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}