<?php

include("hffolder/header1.php");




?>

    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-container">
                            <h1>HOTEL <span id="js-rotating">SELECTION, SERVICES, SOLUTIONS</span></h1>
                            <p class="p-heading p-large">WE GAVE YOU THE BEST SOLUTION OF HOTEL BOOKING</p>
                            <form  role="search" action=search.php method="POST">
                            <input type='text' class=search name="q" >
                           
                            <button type="submit"class="btn-solid-lg " name="submit">Search
                  </button></form>
               


                  
                            </div>
                        </div>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->
    
    <?php
    include("hffolder/footer.php");
    /* <form class="navbar-form pull-left" role="search" action=<?php echo $search_url; ?> method="POST">
            <div class="input-group">
               <input type="text" class="form-control" placeholder="Search" >
               <div class="input-group-btn">
                  <button type="submit" class="btn btn-default" name="submit"> .
                   <span class="glyphicon glyphicon-search"></span>
                  </button>
               </div>
            </div>
          </form> */
    ?>


   