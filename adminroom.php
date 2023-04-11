<?php 
include("hffolder/adminheader.php"); 
if(isset($_REQUEST['id'])) {
    $id=$_REQUEST['id'];
  

}
?> 
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
			      <form   method="POST" action="admin/roomupload.php" enctype="multipart/form-data"  >
					  <div class="form-group">
					    <h4 class="control-h4">Hotel ID</h4>
					    <input type="text" class="form-control" value="<?php echo $id; ?>" name="id" >
					  </div>
					  
                      
                      <h4 for="photo" class="col-sm-3 control-h4">Room Photo</h4>

                    <div class="col-sm-9">
                      <input type="file" class="form-control" id="photo" name="photo">
                    </div>
               

					
                      <div class="form-group">
  						<h4 >type </h4>
						  <textarea type='text' class="form-control" name="type">
  							
  						</textarea>
					  </div>
                      
					  <div class="form-group">
  						<h4 >intro </h4>
						  <textarea type='text' class="form-control" name="intro">
  							
  						</textarea>
					  </div>
                      <div class="form-group">
  						<h4 >point1 </h4>
  						<textarea type='text'  class="form-control" name="point1">
  							
  						</textarea>
					  </div>
                      <div class="form-group">
  						<h4 >point2 </h4>
  						<textarea type='text'  class="form-control" name="point2">
  							
  						</textarea>
					  </div>
                      
					 

					  <div class="form-group">
					    <h4 class="control-h4">Price</h4>
					    <input type="text" class="form-control" name="price"  >
					  </div>

				  	   <button type="submit" class="btn-solid-lg " name="submit">
				  	   		Publish 
				  	   	</button>
				</form>
                </center>
                </div>
				<?php 
				
				include('hffolder/footer.php');?>