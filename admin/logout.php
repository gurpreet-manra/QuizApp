<?php
ob_start();
session_start();
if($_SESSION['admin_id'] == ''){
	
 header('Location: login.php');
} else{
$_SESSION['admin'] = '';
$_SESSION['admin_id'] = '';
header('location: login.php');
 exit(); 
}
?>