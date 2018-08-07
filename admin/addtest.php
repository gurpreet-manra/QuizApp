<?php
ob_start();
session_start();
if($_SESSION['admin_id'] == ''){
	
 header('Location: login.php');
}
if(isset($_GET['msg'])){
$msg = $_GET['msg'];
echo "<script type='text/javascript'>alert('$msg');</script>";
}
include('head.php');
?>

  <body>

  <section id="container" >
      <?php
include('include/topbar.php');

			include('include/sidebar.php');
			?>
      
     
      <section id="main-content">
          <section class="wrapper">
          	<h3> Add Test</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div >
                  	  
                      <form class="form-horizontal style-form" method="post" action="addtest1.php">
						
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Test Name</label>
                              <div class="col-sm-6">
                                  <input type="text" class="form-control" name="test" >
                              </div>
                          </div>
                          
                       
                         
						
						 <div class="form-group">
                              <label class="col-sm-4 col-sm-4 control-label"></label>
							 
                              <div class="col-sm-6">
                                   <button type="submit" class="btn btn-theme" name="add" >ADD</button>
                              </div>
                          </div>
						 
                      </form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
          	
          	
          	
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

  </section>

    


 
    <script src="assets/js/common-scripts.js"></script>

 
	


  </body>
</html>
