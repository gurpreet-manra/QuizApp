<?php
ob_start();
session_start();
if($_SESSION['admin_id'] == ''){
	
 header('Location: login.php');
} else{
include('head.php');

require_once('../database.php');
$query = 'select * from testInfo';
$statement = $db->prepare($query);
$statement->execute();
$users = $statement->fetchAll();
$statement->closeCursor();
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
          	<h3>Users Record</h3>
		  		<div class="row mt">
			  		<div class="col-lg-12">
                      <div class="content-panel">
                     
                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr>
                                  <th>Id</th>
                                  <th>Test Name</th>
                                  <th class="numeric">Status</th>
                                 
                                  <th class="numeric">Change Status</th>
                                  <th class="numeric">Modify</th>
                                 
                              </tr>
                              </thead>
                              <tbody>
					<?php
					foreach($users as $user){
					?>
                                 <tr>
                                  <td> <?php echo $user['test_id']; ?> </td> 
                                  <td><?php echo $user['test_name']; ?></td>
                                  <td class="numeric"><?php echo $user['status']; ?></td>
                                
                                  <td class="numeric"><a href="change.php?t_id=<?php echo $user['test_id']; ?> &status=<?php echo $user['status']; ?>">Change</a></td>
                                  <td class="numeric"><a href="modifytest.php?t_id=<?php echo $user['test_id']; ?>">Modify</a></td>
                                  
                              </tr>
						<?php
} ?>
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







    

  </body>
</html>
