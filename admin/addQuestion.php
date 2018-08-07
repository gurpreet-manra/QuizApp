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
          	<h3> Add Question</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div >
                  	  
                      <form class="form-horizontal style-form" method="post" action="addQuestion1.php">
						
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Question</label>
                              <div class="col-sm-8">
                                  <input type="text" class="form-control" name="question" >
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Option_One</label>
                              <div class="col-sm-8">
                                  <input type="text" class="form-control" name="option1" >
                                  
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Option_Two</label>
                              <div class="col-sm-8">
                                  <input type="text" class="form-control round-form" name="option2" >
                              </div>
                          </div>
                        <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Option_Three</label>
                              <div class="col-sm-8">
                                  <input type="text" class="form-control round-form" name="option3" >
                              </div>
                          </div>
                         <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Option_Four</label>
                              <div class="col-sm-8">
                                  <input type="text" class="form-control round-form" name="option4" >
                              </div>
                          </div>
                         
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Answer</label>
                              <div class="col-sm-8">
                                  <input type="text" class="form-control round-form" name="answer" >
                              </div>
                          </div>
						   <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Test_Name</label>
                              <div class="col-sm-8">
		
								
								
								  <select name="testid" class="form-control round-form">
															     <?php
		require_once('../database.php');
        $query = 'select * from testInfo';
        $statement = $db->prepare($query);
        $statement->execute();
        $tests = $statement->fetchAll();
        $statement->closeCursor();
        ?>
        <?php foreach ($tests as $test) { ?>
                                    <option value="<?php echo $test['test_id']; ?>"><?php echo $test['test_name']; ?></option>
									<?php } ?>
                                      
                                         </select>

                              </div>
                          </div>
						
						 <div class="form-group">
                              <label class="col-sm-4 col-sm-4 control-label"></label>
							 
                              <div class="col-sm-8">
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
