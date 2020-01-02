<?php

include 'header.php';
  
  ?>
<div class="container">

<div class="row">

  <div class="col-lg-3 ">
       <div class="card text-center my-4">
                        <div class="card-header"> 
                            <?=$name?> Thanks for your Order : <?php echo $toys_name; ?>
                        </div>
                        <div class="card-body">
                            <img class="card-img-top col-9 "src="<?php echo $image  ?>" alt="">
                        </div>
                        <div class="card-footer text-muted">
                          We will ensure the dilevery of the toys and send the confirmation by email at  <?=$email?>
                        </div>
         </div>
         
    </div>
  <!-- /.col-lg-3 -->
  <div class="col-lg-9">

            <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
                          <div class="carousel-inner" role="listbox">
                              <div class="carousel-item active">
                                  <img class="d-block img-fluid" src="images/1st.jpg" alt="First slide">
                              </div>
                              <div class="carousel-item">
                                  <img class="d-block img-fluid" src="images/2nd.jpg" alt="Second slide">
                              </div>
                              <div class="carousel-item">
                                  <img class="d-block img-fluid" src="images/3rd.jpg" alt="Third slide">
                              </div>
                              </div>
                              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                          </div> 
            </div>
  </div>  
</div>
</div>
<br><br><br><br><br><br>
<?php 
include 'footer.php';
?>
 