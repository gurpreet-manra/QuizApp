<?php
ob_start();
session_start();
if($_SESSION['admin_id'] == ''){
	
 header('Location: login.php');
} else{
require_once('../database.php');
if(isset($_GET['id'])){
$id = $_GET['id'];

$query = 'DELETE FROM users 
          WHERE user_id = :id';

$statement = $db->prepare($query);
$statement->bindValue(':id', $id);
$statement->execute();
$statement->closeCursor();
 header('location: users.php');
}
}
?>