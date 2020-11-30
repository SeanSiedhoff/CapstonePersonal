<?php include('model/functions.php'); ?>
<?php
        if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: view/login.php');
}
?>
<?php include('view/index.php');?>
