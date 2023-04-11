<?php include("hffolder/header2.php");
include('db/database.php');

if(isset($_REQUEST['id'])) {
    $id=$_REQUEST['id'];
    $result=mysqli_query($con,"SELECT * FROM hotel WHERE id='$id'");
    if($rows=mysqli_fetch_assoc($result)){
        $id= $rows['id'];
        $name = $rows['hotelname'];
        $reason1= $rows['reason1'];
        $para1 = $rows['para1'];
        $reason2= $rows['reason2'];
        $para2 = $rows['para2'];
        $reason3= $rows['reason3'];
        $para3 = $rows['para3'];
        $author= $rows['author'];
        $loc= $rows['loc'];
        
        ?>


   <div style="position: fixed;
               z-index: 10000;
               top: 92%;" class="button-container">
    <a class="btn-solid-reg page-scroll " href="search.php">Back</a>
</div>
<div style="padding-top:10%;">
 <!-- Details 1 -->
 <div id="details" class="accordion">
    <div style="background:  center center no-repeat;" class="area-1">
    <h1><br/></h1>
    <?php
							echo '<img  class="img-fluid" alt="alternative" src="data:image;base64,'.base64_encode($rows['photo']).'">';
		    		?>
                    <div><h1><?php echo $name; ?></h1></div>
                    <div><h1><?php echo $loc; ?></h1></div>
    </div><!-- end of area-1 on same line and no space between comments to eliminate margin white space --><div class="area-2">
        
        <!-- Accordion -->
        <div class="accordion-container" id="accordionOne">
            <h2></h2>
            <div class="item">
                <div id="headingOne">
                    <span data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" role="button">
                        <span class="circle-numbering">1</span><span class="accordion-title"><?php echo $reason1; ?></span>
                    </span>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionOne">
                    <div class="accordion-body">
                    <?php echo $para1; ?>
                    </div>
                </div>
            </div> <!-- end of item -->
        
            <div class="item">
                <div id="headingTwo">
                    <span class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" role="button">
                        <span class="circle-numbering">2</span><span class="accordion-title"><?php echo $reason2; ?></span>
                    </span>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionOne">
                    <div class="accordion-body">
                    <?php echo $para2; ?>
                    </div>
                </div>
            </div> <!-- end of item -->
        
            <div class="item">
                <div id="headingThree">
                    <span class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" role="button">
                        <span class="circle-numbering">3</span><span class="accordion-title"><?php echo $reason3; ?></span>
                    </span>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionOne">
                    <div class="accordion-body">
                    <?php echo $para3; ?>
                    </div>
                </div>
            </div> <!-- end of item -->
        </div> <!-- end of accordion-container -->
        <!-- end of accordion -->

    </div> <!-- end of area-2 -->
</div> <!-- end of accordion -->
<?php
    }}

?>

<!-- Services -->
<div id="services" class="cards-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">Rooms</div>
                <h2>Choose The Room<br> That Suits Your Needs</h2>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div class="row">
            <div class="col-lg-12">
            <?php    

            $result=mysqli_query($con,"SELECT * FROM room WHERE id='$id' ");

?>
  

  <?php 
while($rows=mysqli_fetch_assoc($result)){
    $id= $rows['id'];
    $roomtype = $rows['roomtype'];
    $intro= $rows['intro'];
    $point1= $rows['point1'];
    $point2= $rows['point2'];
    $price= $rows['price'];
   
    
	
	?>


                <!-- Card -->
                <div class="card">
                    <div class="card-image">
                    <?php
							echo '<img  class="img-fluid" alt="alternative" src="data:image;base64,'.base64_encode($rows['photo']).'">';
		    		?>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title"><?php echo $roomtype;?></h3>
                        <p><?php echo $intro;?></p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><?php echo $point1;?></div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><?php echo $point2;?></div>
                            </li>
                        </ul>
                        <p class="price">TAKA: <span><?php echo $price;?></span></p>
                    </div>
                    <div class="button-container">
                        <a class="btn-solid-reg page-scroll" href="#callMe">DETAILS</a>
                    </div> <!-- end of button-container -->
                </div>
<!-- end of card --><?php } ?>

                

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of cards-2 -->
<!-- end of services -->
</div>

    <?php include("hffolder/footer.php");
    ?>