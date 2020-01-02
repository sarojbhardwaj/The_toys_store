<?php
/**********************************************
 *       order-form.php
 *       Skriptet hanterar en GET-request
 *       och visar ett beställningsformulär
 **********************************************/

include_once 'header.php';

// OBS! Vi måste rensa id för att undvika XSS-Attacker
$id = htmlspecialchars($_GET['id']);

// Sök filmen i databasen med hjälp av dess id
require 'db.php';
$sql  = "SELECT * FROM Product_Details WHERE id=:id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();

// Hämta info om filmen
$row   = $stmt->fetch(PDO::FETCH_ASSOC);
$toys_name = $row['toys_name'];
$price = $row['toys_price'];
$description = $row['toys_description'];
$image = "images/$id.jpg";
?>


<div class="container">
<div class ="row">
  <div class="col-lg-3 "><br>
       <div class="card text-center my-5">
                        <div class="card-header"> 
                             <h6>Your Order  : <?php echo $toys_name; ?></h6>
                        </div>
                        <div class="card-body">
                            <div class="card bg-dark text-white my-7">
               <img src="<?php echo $image  ?>" class="card-img" alt="...">
                            </div>
                        </div>
                        <div class="card-footer"> 
                             <h6><?php echo $description ;?></h6>
                        </div>
                        
       </div>
  </div>    
  <div class ="col-9"><br>
                    <h4> Fill in your information below !</h4>
                    <form  action="email.php?id=<?php echo $id ?>" method="post"> 
                        <div class="form-group row">
                            <div class="col-md-10 control-group form-group">
                                <input type="text" name="name" required class="form-control"  placeholder="Name">
                            </div>
                            <div class="col-md-10 control-group form-group">
                                <input type="text"  name="address" required class="form-control" placeholder="Address">
                            </div>
                            <div class="col-md-10 control-group form-group">
                                <input type="text" name="Place" required class="form-control" placeholder="Place">
                            </div>
                            <div class="col-md-10 control-group form-group">
                                <input type="text" name="postnr" required  class="form-control" placeholder="Post number">
                            </div>
                        <div class="col-md-10 control-group form-group">
                                <input type="email" name="email"required class="form-control" placeholder="E-mail">
                        </div>
                            <div class="col-md-10 control-group form-group">
                                <input type="text" name="telephone" required class="form-control" placeholder="Telephone">
                                <input type="hidden" name="toys_name" value=<?php echo $toys_name; ?>>    
                            </div>
                         
                                                     
                            <div class="col-md-10 control-group form-group">
                                <button type="submit" class= "btn-success btn-sm btn-block">Order</button>
                            </div>
                        </div>
                    </div>
                    </form>
                  </div>
              </div>
              </div>

</div>
<br><br>
<?php
require_once 'footer.php';
?>