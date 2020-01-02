<?php

// Display confirmation on the screen

  include 'header.php';
  
  ?>
<body class="container"><br><br>

    <h1>Contact us</h1><br>
    
    <form action="mail_contactus.php" method="post" class="row">
        <div class="col-md-6 form-group">
            <input name="name" type="text" required
            class="form-control" placeholder="Name">
        </div>        
        <div class="col-md-6 form-group">
            <input name="email" type="email" required
            class="form-control" placeholder="Email">
        </div>       
        <div class="col-md-12 form-group">
            <textarea name="message" cols="30" rows="5" required
            class="form-control" placeholder="write a message"></textarea>
        </div>
        <div class="col-md-4 form-group">
            <input type="submit" value="Send the message"
            class="btn btn-success form-control">
        </div>
    </form>

<br><br><br><br><br>
<?php 
include 'footer.php';
?>
