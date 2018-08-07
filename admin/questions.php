<?php
include('head.php');

require_once('../database.php');
$query = 'select * from questions';
$statement = $db->prepare($query);
$statement->execute();
$questions = $statement->fetchAll();
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
                                  <th>Question</th>
                                  <th class="numeric">Option_One</th>
                                  <th class="numeric">Option_Two</th>
                                  <th class="numeric">Option_Three</th>
                                  <th class="numeric">Option_Four</th>
                                  <th class="numeric">Answer</th>
                                  <th class="numeric">Test Name</th>
                                  <th class="numeric">Delete</th>
						    <th class="numeric">Modify</th>
                              </tr>
                              </thead>
                              <tbody>
					<?php
					foreach($questions as $que){
					?>
                                 <tr>
                                  <td> <?php echo $que['question_id']; ?> </td> 
                                  <td><?php echo $que['question']; ?></td>
                                  <td class="numeric"><?php echo $que['option_1']; ?></td>
                                  <td class="numeric"><?php echo $que['option_2']; ?></td>
                                  <td class="numeric"><?php echo $que['option_3']; ?></td>
                                  <td class="numeric"><?php echo $que['option_4']; ?></td>
						    <td class="numeric"><?php echo $que['answer']; ?></td>
						    
						    													     <?php
		$id = $que['test_id']; 
        $query1 = 'select * from testInfo where test_id = :id';
        $statement1 = $db->prepare($query1);
	   $statement1->bindValue(':id', $id);
        $statement1->execute();
        $test = $statement1->fetch();
        $statement1->closeCursor();
        ?>
						      <td class="numeric"><?php echo $test['test_name']; ?></td>
                                  <td class="numeric"><a href="deleteQue.php?qid=<?php echo $que['question_id']; ?> &testid=<?php echo $que['test_id']; ?>">Delete</a></td>
                                  <td class="numeric"><a href="modifyQue.php?qid=<?php echo $que['question_id']; ?> &testid=<?php echo $que['test_id']; ?>">Modify</a></td>
                                  
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




    <script src="assets/js/common-scripts.js"></script>

   
    

  </body>
</html>
