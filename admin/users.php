<?php
include('head.php');

require_once('../database.php');
$query = 'select * from users';
$statement = $db->prepare($query);
$statement->execute();
$users = $statement->fetchAll();
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
          	<h3>Users Record</h3>
		  		<div class="row mt">
			  		<div class="col-lg-12">
                      <div class="content-panel">
                     
                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr>
                                  <th>Id</th>
                                  <th>FirstName</th>
                                  <th class="numeric">LastName</th>
                                  <th class="numeric">Email</th>
                                  <th class="numeric">Contact</th>
                                  <th class="numeric">Address</th>
                                  <th class="numeric">Delete</th>
                                  <th class="numeric">Modify</th>
                                  <th class="numeric">Tests</th>
                              </tr>
                              </thead>
                              <tbody>
					<?php
					foreach($users as $user){
					?>
                                 <tr>
                                  <td> <?php echo $user['user_id']; ?> </td> 
                                  <td><?php echo $user['first_name']; ?></td>
                                  <td class="numeric"><?php echo $user['last_name']; ?></td>
                                  <td class="numeric"><?php echo $user['email']; ?></td>
                                  <td class="numeric"><?php echo $user['contact']; ?></td>
                                  <td class="numeric"><?php echo $user['address']; ?></td>
                                  <td class="numeric"><a href="delete.php?id=<?php echo $user['user_id']; ?>">Delete</a></td>
                                  <td class="numeric"><a href="modify.php?id=<?php echo $user['user_id']; ?>">Modify</a></td>
                                  <td class="numeric"><a href="tests.php?id=<?php echo $user['user_id']; ?>">Tests</a></td>
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
