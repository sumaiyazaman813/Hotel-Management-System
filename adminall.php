<?php
include("hffolder/adminheader.php");
include('db/database.php');


if(!isset($_SESSION['username'])){
	header('location:index.php');
	die();
}
else 

$result=mysqli_query($con,"SELECT * FROM hotel ");





?>
<style>
img{
    max-width:200px;
    max-height:300px;
}</style>
<div class="boxwhole"> 
<?php 
while($rows=mysqli_fetch_assoc($result)){
    $id= $rows['id'];
    $name = $rows['hotelname'];
    $reason1= $rows['reason1'];
    $reason2= $rows['reason2'];
    $reason3= $rows['reason3'];
    $author= $rows['author'];
    $loc= $rows['loc'];
    
	
	?>
	
	<div>
    <a style="text-decoration: none;" href="single.php?<?php echo $id; ?>">
    <!-- Intro -->
    <div id="intro" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="text-container">
                        <div class="section-title"><?php echo"$loc"?></div>
                        <h2><?php echo "$name"?></h2>
                        <p> <?php echo"$reason1"?></p>
                        <p class="testimonial-text"><?php echo"$reason2"?>  <?php echo"$reason1"?></p>
                        <div class="testimonial-author"><?php echo"$author"?></div>
                        <a class="btn-solid-lg " href=<?php echo "adminroom.php?id="; echo $id; ?>>ADD ROOM</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-7">
                    <div class="image-container">
                        
                        <?php
							echo '<img  class="img-fluid" alt="alternative" src="data:image;base64,'.base64_encode($rows['photo']).'">';
		    		?>
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
</a><?php 
}?>
