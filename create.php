<?php
    //Step 1- Call Database Connection File
    include 'db.php';

    //Step2- Insert form data into database using insert statement
    $stmt = $conn->prepare("INSERT INTO contact_form 
                                   ( name ,  email,  message)
                            VALUES (:name , :email, :message) ");
    
    //Bind parameters with Variables
    $stmt->bindParam(':name'   , $name);
    $stmt->bindParam(':email'  , $email);
    $stmt->bindParam(':message', $message);

    //Execute the above insert statement
    $stmt->execute(); 
    
    
    ?>
    