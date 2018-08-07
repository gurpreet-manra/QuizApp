<?php
ob_start();
session_start();
if($_SESSION['admin_id'] == ''){
	
 header('Location: login.php');
} else{
include('head.php');
require_once('../database.php');
$tid = $_GET['t_id'];
$query = 'select * from testInfo where test_id = :tid';
$statement = $db->prepare($query);
$statement->bindValue(':tid', $tid);
$statement->execute();
$test = $statement->fetch();
}
if(isset($_GET['msg'])){
$msg = $_GET['msg'];
echo "<script type='text/javascript'>alert('$msg');</script>";
}
?>

  <body>

  <section id="container" >
      <?php
include('include/topbar.php');

			include('include/sidebar.php');
			?>
      
     
      <section id="main-content">
          <section class="wrapper">
          	<h3> User Information</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div >
                  	  
                      <form class="form-horizontal style-form" method="post" action="updatetest.php">
						<input type="hidden" name="tid" value="<?php echo $test['test_id']; ?>">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Test Name</label>
                              <div class="col-sm-8">
                                  <input type="text" class="form-control" name="tname" value="<?php echo $test['test_name']; ?>">
                              </div>
                          </div>
                          
                          
						
						 <div class="form-group">
                              <label class="col-sm-4 col-sm-4 control-label"></label>
							 
                              <div class="col-sm-8">
                                   <button type="submit" class="btn btn-theme" name="update" >Update</button>
                              </div>
                          </div>
						 
                      </form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
          	
          	
          	
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

  </section>

  


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>


	

  </body>
</html>
