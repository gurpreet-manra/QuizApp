<?php
ob_start();
session_start();
if($_SESSION['admin_id'] == ''){
	
 header('Location: login.php');
} else{
    require_once('../database.php');
if(isset($_POST['update']))
   {
        $testID_Mod = filter_input(INPUT_POST, 'tid');
        $testAdd_Mod = filter_input(INPUT_POST, 'tname');
      
   }
        if($testAdd_Mod!="")
        {
            $query = 'UPDATE testInfo SET test_name=:testAdd_Mod WHERE test_id=:testID_Mod';
            $statement= $db->prepare($query);
            $statement->bindValue(':testID_Mod',$testID_Mod);
            $statement->bindValue(':testAdd_Mod',$testAdd_Mod);
        
            $statement->execute();
            $statement->closeCursor();
           	 $msg = "Test Updated";
        header("location: changetest.php?msg=$msg");
        } else {
									 $msg = "Please Enter a Value";
        header("location: modifytest.php?msg=$msg &t_id=$testID_Mod");
								}
       
}
            ?>