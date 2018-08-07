<?php
ob_start();
session_start();
if($_SESSION['admin_id'] == ''){
	
 header('Location: login.php');
} else{
require_once('../database.php');
$status = '';
if(isset($_GET['t_id'])){
    $id = $_GET['t_id'];
     $sta = $_GET['status'];
  if($sta == 'Disable'){
    $status = 'Enable';
  } else {
     $status = 'Disable';
  }
         
         $query = 'UPDATE testInfo
          SET status = :status
          WHERE test_id = :id';

$statement = $db->prepare($query);
$statement->bindValue(':status', $status);
$statement->bindValue(':id', $id);

$statement->execute();
$statement->closeCursor();

header('location: changetest.php');
         
}
}
?>