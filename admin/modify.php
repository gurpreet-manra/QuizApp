<?php
ob_start();
session_start();
if($_SESSION['admin_id'] == ''){	
 header('Location: login.php');
} else{
include('head.php');
require_once('../database.php');
$id = $_GET['id'];
$query = 'select * from users where user_id = :id';
$statement = $db->prepare($query);
$statement->bindValue(':id', $id);
$statement->execute();
$data = $statement->fetch();
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
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3> User Information</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div >
                  	  
                      <form class="form-horizontal style-form" method="post" action="update.php">
						<input type="hidden" name="id" value="<?php echo $data['user_id']; ?>">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">FirstName</label>
                              <div class="col-sm-8">
                                  <input type="text" class="form-control" name="fname" value="<?php echo $data['first_name']; ?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">LastName</label>
                              <div class="col-sm-8">
                                  <input type="text" class="form-control" name="lname" value="<?php echo $data['last_name']; ?>">
                                  
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Email</label>
                              <div class="col-sm-8">
                                  <input type="text" class="form-control round-form" name="email" value="<?php echo $data['email']; ?>">
                              </div>
                          </div>
                        <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Contact</label>
                              <div class="col-sm-8">
                                  <input type="text" class="form-control round-form" name="no" value="<?php echo $data['contact']; ?>">
                              </div>
                          </div>
                         <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Address</label>
                              <div class="col-sm-8">
                                  <input type="text" class="form-control round-form" name="add" value="<?php echo $data['address']; ?>">
                              </div>
                          </div>
                         
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Password</label>
                              <div class="col-sm-8">
                                  <input type="text" class="form-control round-form" name="pass" value="<?php echo $data['password']; ?>">
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



  
    <script src="assets/js/common-scripts.js"></script>

    

  </body>
</html>
