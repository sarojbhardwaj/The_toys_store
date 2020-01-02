<?php


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    // Hämta data från POST-arrayen
    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    

    // Display confirmation on the screen
    include 'confirm_contactus.php';

    // Skicka ett mejl
    $to = "sarojdbhardwaj@gmail.com";
    $subject = "Meddelande från $name";

    $headers[] = "From: $email";
    $headers[] = "Reply-To: noreply@example.com";
    $headers[] = "MIME-Version: 1.0";
    $headers[] = "Content-Type: text/html; charset=utf-8";
    $headers[] = "Bcc: bhardwajsaroj@yahoo.com"; // Dold kopia

    mail($to , $subject, $message , implode("\r\n", $headers));


}else{
    header('Location:index.php');
}


?>
