<?php 
 include("hffolder/header2.php");
 
 
 include('db/database.php');
$msg="";
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	$check=mysqli_num_rows(mysqli_query($con,"SELECT * FROM user WHERE email='$email'"));
	
	if($check>0){
		$msg="Email id already present";
	}else{
		$verification_id=rand(111111111,999999999);
		
		mysqli_query($con,"insert into user(name,email,password,verification_status,verification_id) values('$name','$email','$password',0,'$verification_id')");
		
		$msg="We've just sent a verification link to <strong>$email</strong>. Please check your inbox and click on the link to get started. If you can't find this email (which could be due to spam filters), just request a new one here.";
		
		$mailHtml="Please confirm your account registration by clicking the button or link below: <a href='http://127.0.0.1/dreamproject/check.php?id=$verification_id'>Varified</a>";
		
		smtp_mailer($email,'Account Verification',$mailHtml);
		
	}
}
 
function smtp_mailer($to,$subject, $msg){
	require_once("smtp/class.phpmailer.php");
	$mail = new PHPMailer(); 
	$mail->IsSMTP(); 
	$mail->SMTPDebug = 1; 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = "showmik01552@gmail.com";
	$mail->Password = "musfiq@gmail.com";
	$mail->SetFrom("showmik01552@gmail.com");
	$mail->Subject = $subject;
	$mail->Body =$msg;
	$mail->AddAddress($to);
    $mail->SMTPoptions=array('ssl'=>array(
             'verify_peer'=>false,
             'verify_peer_name'=>false,
              'allow_self_signed'=>false));
	if(!$mail->Send()){
		return 0;
	}else{
		return 1;
	}
}
 
 ?>
    <!-- Header -->
    <header id="header" class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>registration</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->


      <div style="padding-left: 20%; padding-right: 20%; padding-top: 10%;">

                    <div class="text-container">
                        <h3>Consent Of Using Aria Landing Page</h3>
					    <p class="mb-5">By using any of the Services, or submitting or collecting any Personal Information via the Services, you consent to the collection, transfer, storage disclosure, and use of your Personal Information in the manner set out in this Privacy Policy. If you do not consent to the use of your Personal Information in these ways, please stop using the Services.</p>
                    </div> <!-- end of text-container -->
                                       
                    <div class="row">
                        <div class="col-md-6">
                            <div class="text-container last">
                                <h3>Inquire What Data We Have</h3>
                                <p>Aria Landing Page uses tracking technology on the landing page, in the Applications, and in the Platforms, including mobile application identifiers and a unique Aria user ID to help us recognize you across different Services, to monitor usage and web traffic routing for the Services, and to customize and improve the Services.</p>
                                <p> By visiting Aria or using the Services you agree to the use of cookies in your browser and HTML-based emails. Cookies are small text files placed on your device when you visit a website. By using any of the Services, or submitting or collecting any Personal Information via the Services, you consent and use of your <a class="green" href="#your-link">Personal Information</a></p>
                            </div> <!-- end of text container -->
                        </div> <!-- end of col-->
                        <div class="col-md-6">

                            <!-- Privacy Form -->
                            <div class="form-container">
                            <form method="post">
		<h2>Register</h2>
		<p class="hint-text">Create your account. It's free and only takes a minute.</p>
         <div class="form-group">
        	<input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
        </div>
		
		<div class="form-group">
            <button type="submit"  name="submit" class="btn btn-success btn-lg btn-block">Register Now</button>
        </div>
		<div class="message">
		<?php
		echo $msg;
		?>
		</div>
    </form>
                            </div> <!-- end of form container -->
                            <!-- end of privacy form -->

                        </div> <!-- end of col--> 
                    </div> <!-- end of row -->
                    <a class="btn-outline-reg back" href="index.html">BACK</a>
                </div> <!-- end of col-->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-2 -->
    <!-- end of privacy content -->


    <!-- Breadcrumbs -->
    <div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                        <a href="index.html">Home</a><i class="fa fa-angle-double-right"></i><span>Privacy Policy</span>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->
</div>

    
<?php 
 include("hffolder/footer.php");
 
 /* <?php

?>



    <form method="post">
		<h2>Register</h2>
		<p class="hint-text">Create your account. It's free and only takes a minute.</p>
         <div class="form-group">
        	<input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
        </div>
		
		<div class="form-group">
            <button type="submit"  name="submit" class="btn btn-success btn-lg btn-block">Register Now</button>
        </div>
		<div class="message">
		<?php
		echo $msg;
		?>
		</div>
    </form>
	<div class="text-center">Already have an account? <a href="login.php">Sign in</a></div>
</div>
</body>
</html>                             */
 
 ?>