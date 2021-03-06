<?php 
include('../model/functions.php');

if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in as admin first";
	header('location: ../view/login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: ../view/login.php");
}
?>
<?php include('../view/header.php'); ?>
<body>
	<div class="header">
		<h2>Admin - Home Page</h2>
	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<div class="profile_info">
                        <i class="fas fa-user-cog"></i>
			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="index.php?logout='1'" style="color: red;">logout</a>
                       &nbsp; <a href="create_user.php"> + add user</a>
					</small>

				<?php endif ?>
			</div>
		</div>
                <div class="profile_info">
                <table>
                    <tr>
                        <th>User</th>
                        <th>Email</th>
                    </tr>
                       <?php foreach ($users as $user) : ?>
                    <tr>
                    <td><?php echo htmlspecialchars($user['username']); ?></td>
                    <td><?php echo htmlspecialchars($user['email']); ?></td>
                    </tr>
                    
                    <?php endforeach; ?>
                </table>
                    </div>
	</div>
<?php include('../view/footer.php'); ?>