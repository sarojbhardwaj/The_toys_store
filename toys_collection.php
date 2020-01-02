<?php
require_once 'db.php';
$stmt = $conn->prepare("SELECT * FROM Product_Details");
$stmt->execute();
echo "<div class='row'>";
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) :
$id    = $row['id'];
$toys_name = $row['toys_name'];
$toys_price = $row['toys_price'];
$toys_description = $row['toys_description'];
$image = "images/$id.jpg";
?>

<div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
<a href="order-form.php?id=<?php echo $id ?>">
     <div class="card m-1 p-3 mb-2 bg-light text-dark">
        <img class="card-img-top" src="<?php echo $image  ?>" alt="<?php echo $title; ?>">
            <div class="card-body">
            <h6 class="card-title">
             <?php 
             echo $toys_name . '<br>'; 
             echo $toys_price . 'kr';
             '<br>'; 
             $toys_description = $row['toys_description'];
             ?>
            </h6>
            </div>
</a>
     <div class="card-footer">
          <div class="clearfix">
              <a class="btn btn-sm btn-block btn-primary" href="order-form.php?id=<?php echo $id ?>">Buy</a>
          </div>
     </div>
     </div>

</div>
<?php 
endwhile; 
echo '</div>';
?>
