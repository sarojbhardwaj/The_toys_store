<?php

if(!isset($_GET['id'])){
    header('Location: index.php');
    // Make sure that code below does not get executed when we redirect. 
    // http://php.net/manual/en/function.header.php
    exit;
}

$id = htmlspecialchars($_GET['id']);

// Sök filmen i databasen med hjälp av dess id
require 'db.php';
$sql  = "SELECT * FROM Product_Details WHERE id=:id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();

// Get info on the toys
$row   = $stmt->fetch(PDO::FETCH_ASSOC);
$toys_name = $row['toys_name'];
$price = $row['toys_price'];
$description = $row['toys_description'];
$image = "images/$id.jpg";


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    // Hämta data från POST-arrayen
    $name    = htmlspecialchars($_POST['name']);
    $address   = htmlspecialchars($_POST['address']);
    $Place    = htmlspecialchars($_POST['Place']);
    $postnr   = htmlspecialchars($_POST['postnr']);
    $email   = htmlspecialchars($_POST['email']);
    $telephone = htmlspecialchars($_POST['telephone']);
    $message = "Deliver the order for".$toys_name." at ".$address." ". $Place." ".$postnr. 
    "Telephone number is " .$telephone;

        
     // Skicka data till databasen
    //include 'create.php';

    // Visa bekräftelse på skärmen
    include 'confirm.php';

    // Skicka ett mejl
    $to = "sarojdbhardwaj@gmail.com";
    $subject = "Meddelande från $name";

    $headers[] = "From: $email";
    $headers[] = "Reply-To: noreply@example.com";
    $headers[] = "MIME-Version: 1.0";
    $headers[] = "Content-Type: text/html; charset=utf-8";
    $headers[] = "Bcc: deepakinderbhardwaj@gmail.com"; // Dold kopia

    mail($to , $subject, $message , implode("\r\n", $headers));


}else{
    header('Location:index.php');
}



