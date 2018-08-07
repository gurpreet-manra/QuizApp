<?php
ob_start();
session_start();
if($_SESSION['admin_id'] == ''){
	
 header('Location: login.php');
} else{
	require_once('../database.php');
	$input = 'pass';
	$input1 = 'fail';
	$query = 'select * from test where status = :input';
$statement = $db->prepare($query);
$statement->bindValue(':input', $input);
$statement->execute();
$product = $statement->fetchAll();
$number = count($product);


$query1 = 'select * from test where status = :input';
$statement1 = $db->prepare($query1);
$statement1->bindValue(':input', $input1);
$statement1->execute();
$product1 = $statement1->fetchAll();
$number1 = count($product1);

$query2 = 'select * from test';
$statement2 = $db->prepare($query2);
$statement2->execute();
$product2 = $statement2->fetchAll();
$number2 = count($product2);
$div = $number2*10;
$total = 0;
foreach($product2 as $no){
	$total += $no['score'];
}
$avg = $total/$div;
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

              <div class="row">
                  <div class="col-lg-9 main-chart">
                  
                    <div class="row mt">
																					
																					<div class="col-md-4 mb">
						
							<div>
								<div>
									<h5></h5>
								</div>
								
							
								<div >
									<div >
										<br>
										<br>
										<br>
											
										<h2> </h2>
									</div>
									
								</div>
							</div>
						</div>
																					
																					
																					
																					
                    
      <div class="col-md-4 mb">
						
							<div class="white-panel pn">
								<div class="white-header">
									<h5>Passed Users</h5>
								</div>
								
							
								<div class="row">
									<div >
										<br>
										<br>
										<br>
											
										<h2><?php echo $number; ?> </h2>
									</div>
									
								</div>
							</div>
						</div>
                      	

                  	<div class="col-md-4 mb">
							
							<div class="white-panel pn">
								<div class="white-header">
									<h5>Failed Users</h5>
								</div>
								
							
								<div class="row">
									<div >
										<br>
										<br>
										<br>
											
										<h2><?php echo $number1; ?></h2>
									</div>
									
								</div>
							</div>
						</div>
                      	
			
                      	

                    </div>
                   
        </div>
                  
                  
     
              </div>
														
														<div class="row">
                  <div class="col-lg-9 main-chart">
                  
                    <div class="row mt">
																					
																					 	<div class="col-md-4 mb">
					
							<div >
								<div >
									<h5></h5>
								</div>
								
							
								<div >
									<div >
										<br>
										<br>
										<br>
											
										<h2></h2>
									</div>
									
								</div>
							</div>
				</div>
																					
																					
																					
																					
                    
    	<div class="col-md-4 mb">
					
							<div class="white-panel pn">
								<div class="white-header">
									<h5>Avarage Score</h5>
								</div>
								
							
								<div class="row">
									<div >
										<br>
										<br>
										<br>
											
										<h2><?php echo $avg; ?></h2>
									</div>
									
								</div>
							</div>
				</div>
                      	

                  	<div class="col-md-4 mb">
							
							<div class="white-panel pn">
								<div class="white-header">
									<h5>Current Users</h5>
								</div>
								<?php
								$query3 = 'select * from session';
$statement3 = $db->prepare($query3);
$statement3->execute();
$product3 = $statement3->fetchAll();
$number3 = count($product3);
							?>
								<div class="row">
									<div >
										<br>
										<br>
										<br>
											
										<h2><?php echo $number3; ?></h2>
									</div>
									
								</div>
							</div>
						</div>
    </div>
                   
        </div>
             </div>
														</section>
      </section>
   </section>

    
    

  </body>
</html>
