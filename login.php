 <?php 
 include("hffolder/header2.php");?>

    <!-- Header -->
    <header id="header" class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>LOGIN</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->
    <div  style=" display: flex; align-items: center; justify-content: center; padding: 5%;">
    <div class="signup-form">
    <form method="post">
		<h2>Login</h2>
		<p class="hint-text">Enter your email id and password.</p>
         
        <div class="form-group">
        	<input type="email" class="form-control" name="email" id="email" placeholder="Email">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
        </div>
		
		<div class="form-group">
            <button type="button" class="btn btn-success btn-lg btn-block" onclick="login_now()">Login Now</button>
        </div>
		<div class="message"></div>
    </form>
	<div class="text-center">Create a account? <a href="registration.php">Sign up</a></div>
	<div class="text-center">forget password <a href="forgetmail.php">CLICK</a></div>
</div>
<script>
function login_now(){
	var email=jQuery('#email').val();
	var password=jQuery('#password').val();
	
	jQuery.ajax({
		url:'login_check.php',
		type:'post',
		data:'email='+email+'&password='+password,
		success:function(result){
			if(result=='done'){
				window.location.href='index.php';
			}
			jQuery('.message').html(result);
		}
	});
}
</script>
    </div> <!-- end of form container -->
    <!-- end of privacy form -->



   
<?php 
include("hffolder/footer.php");
?>