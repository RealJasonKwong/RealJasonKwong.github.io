<?php
    $name = $_POST['name'];
    $message = $_POST['message'];
    $mailFrom = $_POST['email'];
    $email_subject = "New submission";

    $mailTo = 'jason@testjk.xyz';
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;

    mail($mailTo, $email_subject, $txt, $headers);
    header("Location: index.html");
?>