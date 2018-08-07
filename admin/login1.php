<?php
session_start();
ob_start();
	require_once('../database.php');
if(isset($_POST['signin'])){
	$user = $_POST['user'];
	$pwd = $_POST['pass'];
	
		$query = 'select * from admin where username = :user and password = :pass';
$statement = $db->prepare($query);
$statement->bindValue(':user', $user);
$statement->bindValue(':pass', $pwd);
$statement->execute();
$product = $statement->fetch();

if(isset($product)){
	$_SESSION['admin'] = $product['username'];
	$_SESSION['admin_id'] = $product['id'];
 
	 header('Location: index.php');
} else{
	header('Location: login.php');
	
	
}
}
?>