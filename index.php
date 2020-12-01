<!-- Admin/User code modified from the following tutorial: https://codewithawa.com/posts/admin-and-user-login-in-php-and-mysql-database -->
<?php include('model/functions.php'); ?>
<?php
        if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: view/login.php');
}
?>
<?php include('dance.php'); ?>