<?php
ob_start();
session_start();
if($_SESSION['admin_id'] == ''){
	
 header('Location: login.php');
} else{
    require_once('../database.php');
    if(isset($_POST['add']))
    {
        $testAdd = filter_input(INPUT_POST, 'test');
 
        if($testAdd!="")
        {
									
									 $query1 = 'select * from testInfo';
            $statement1 = $db->prepare($query1);
            $statement1->execute();
            $tests = $statement1->fetchAll();
            $statement1->closeCursor();
												foreach($tests as $test){
                $test1 = $test['test_name'];
                if($testAdd == $test1){
                  $msg = "Test already exists ";
        header("location: addtest.php?msg=$msg");
        exit();
                }
            }
            
												
        $query = 'INSERT INTO testInfo(test_name,status) VALUES (:testname, :status )';
        $statement= $db->prepare($query);
        $statement->bindValue(':testname',$testAdd);
								$statement->bindValue(':status','Disable');
        $statement->execute();
        $statement->closeCursor();
        
        $msg = "Test Added Sucessfully";
        header("location: addtest.php?msg=$msg");
    }
				}
}
?>