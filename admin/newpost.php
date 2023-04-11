<?php 

if(isset($_POST['submit'])) {

$name=$_POST['name'];
$location=$_POST['location'];
$reason1=$_POST['reason1'];
$para1=$_POST['para1'];
$reason2=$_POST['reason2'];
$para2=$_POST['para2'];
$reason3=$_POST['reason3'];
$para3=$_POST['para3'];
$author=$_POST['author'];


$filename=addslashes(file_get_contents($_FILES["photo"]["tmp_name"]));
include("../db/database.php");
/* CHECK if same user or email exists or not ? */
$query="INSERT hotel (hotelname , loc , photo , reason1 , para1 , reason2 , para2, reason3 , para3, author)
        VALUES ('$name' ,'$location','$filename' , '$reason1' , '$para1' , '$reason2' , '$para2', '$reason3' , '$para3', '$author') ";
mysqli_query($con , $query);

echo "Successfully posted your post";
header("location:../adminhotel.php");


}

/* * * * * POST Form * * * * */
else {

echo "NOT DONE";
}
/* */ 

?>
