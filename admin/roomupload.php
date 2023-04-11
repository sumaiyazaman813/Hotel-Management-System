<?php 

if(isset($_POST['submit'])) {

$id=$_POST['id'];
$type=$_POST['type'];
$intro=$_POST['intro'];
$point1=$_POST['point1'];
$point2=$_POST['point2'];
$price=$_POST['price'];



$filename=addslashes(file_get_contents($_FILES["photo"]["tmp_name"]));
include("../db/database.php");
/* CHECK if same user or email exists or not ? */
$query="INSERT room (id ,  photo , roomtype , intro , point1 , point2, price )
        VALUES ('$id' ,'$filename' , '$type' , '$intro' , '$point1' , '$point2', '$price') ";
mysqli_query($con , $query);

echo "Successfully posted your post";
header("location:../adminroom.php?id= $id");


}

/* * * * * POST Form * * * * */
else {

echo "NOT DONE";
}
/* */ 

?>