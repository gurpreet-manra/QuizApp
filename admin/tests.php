<?php
ob_start();
session_start();
if($_SESSION['admin_id'] == ''){
	
 header('Location: login.php');
} else{
include('head.php');
$id = $_GET['id'];
require_once('../database.php');
$query = 'select * from test where user_id = :id order by score desc';
$statement = $db->prepare($query);
$statement->bindValue(':id', $id);
$statement->execute();
$tests = $statement->fetchAll();
$statement->closeCursor();

?>

  <body>

  <section id="container" >
       <?php
include('include/topbar.php');

			include('include/sidebar.php');
			?>
     
      <section id="main-content">
          <section class="wrapper">
          	<h3>User Tests</h3>
		  		<div class="row mt">
			  		<div class="col-lg-12">
                      <div class="content-panel">
                     
                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr>
                                  <th>Test_id</th>
                                  <th>Date</th>
                                  <th class="numeric">Scores</th>
                                  <th class="numeric">Result</th>
                                  
                              </tr>
                              </thead>
                              <tbody>
					<?php
					foreach($tests as $test){
					?>
                                 <tr>
                                  <td> <?php echo $test['test_id']; ?> </td> 
                                  <td><?php echo $test['date']; ?></td>
                                  <td class="numeric"><?php echo $test['score']; ?></td>
                                  <td class="numeric"><?php echo $test['status']; ?></td>
                                
                              </tr>
						<?php
}
}?>
                           </tbody>
                          </table>
                          </section>
                  </div><!-- /content-panel -->
               </div><!-- /col-lg-4 -->			
		  	</div><!-- /row -->

		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
  </section>




    <script src="assets/js/common-scripts.js"></script>

  
    

  </body>
</html>
