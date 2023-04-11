<?php include('hffolder/adminheader.php');?>
<style>
h4{
    color:black;
  
}
input,textarea{
	box-shadow:inset 1px 1px 10px black;
}</style>
	  <div style="padding:10%;
	  padding-left:30%;
	  padding-right:30% "> <center>
			      <form   method="POST" action="admin/newpost.php" enctype="multipart/form-data"  >
					  <div class="form-group">
					    <h4 class="control-h4">Hotel name</h4>
					    <input type="text" class="form-control"  name="name" >
					  </div>
					  <div class="form-group">
					    <h4 class="control-h4">Location</h4>
					    <input type="text" class="form-control"  name="location" >
					  </div>
                      
                      <h4 for="photo" class="col-sm-3 control-h4">Hotel Photo</h4>

                    <div class="col-sm-9">
                      <input type="file" class="form-control" id="photo" name="photo">
                    </div>
               

					  <div class="form-group">
  						<h4 >reason1: </h4>
  						<input type='text' class="form-control"   name="reason1">
  							
  						</input>
					  </div>
                      <div class="form-group">
  						<h4 >paragraph1: </h4>
						  <textarea type='text' class="form-control" name="para1">
  							
  						</textarea>
					  </div>
                      
					  <div class="form-group">
  						<h4 >reason2: </h4>
						  <input type='text' class="form-control"  name="reason2">
  							
						  </input>
					  </div>
                      <div class="form-group">
  						<h4 >paragraph2: </h4>
  						<textarea type='text'  class="form-control" name="para2">
  							
  						</textarea>
					  </div>
                      
					  <div class="form-group">
  						<h4 >reason3: </h4>
						  <input type='text' class="form-control" name="reason3">
  							
  						</input>
					  </div>
                      <div class="form-group">
  						<h4 >paragraph3: </h4>
  						<textarea type='text' class="form-control" name="para3">
  							
  						</textarea>
					  </div>

					  <div class="form-group">
					    <h4 class="control-h4">AUTHOR</h4>
					    <input type="text" class="form-control" name="author"  >
					  </div>

				  	   <button type="submit" class="btn-solid-lg " name="submit">
				  	   		Publish 
				  	   	</button>
				</form>
                </center>
                </div>
				<?php 
				
				include('hffolder/footer.php');?>

