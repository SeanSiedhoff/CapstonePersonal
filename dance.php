<?php include('view/header.php');?>
<body>
    <header></header>
	<div class="header">
		<h2>Home Page</h2>
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
                        <i class="fas fa-user"></i>
			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="index.php?logout='1'" style="color: red;">logout</a>
					</small>

				<?php endif ?>
			</div>
		</div>
                <div>
                <table class="danceTable">
                    <tr>
                        <th>Dance</th>
                        <th>Figure Name</th>
                        <th>Figure</th>
                        <th>Foot Positions</th>
                        <th>Timing</th>
                        <th>Lead/Follow</th>
                        <th>Style</th>
                    </tr>
                       <?php foreach ($dances as $dance) : ?>
                    <tr>
                        <td><?php echo htmlspecialchars($dance['Dance']); ?></td>
                        <td><?php echo htmlspecialchars($dance['FigureName']); ?></td>
                        <td><?php echo htmlspecialchars($dance['Fig']); ?></td>
                        <td><?php echo htmlspecialchars($dance['FP']); ?></td>
                        <td><?php echo htmlspecialchars($dance['T']); ?></td>
                        <td><?php echo htmlspecialchars($dance['LF']); ?></td>
                        <td><?php echo htmlspecialchars($dance['S']); ?></td>
                    </tr>
                    
                    <?php endforeach; ?>
                </table>
        	</div>
        </div>
<?php include('view/footer.php');?>