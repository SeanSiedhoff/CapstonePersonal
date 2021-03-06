<?php include('../model/functions.php') ?>
<?php include('header.php'); ?>
<div class="header">
    <h2>Register</h2>
</div>
<form method="post" action="register.php">
    <?php echo display_error(); ?>
    <div class="input-group">
        <label>Username</label>
        <input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>">
    </div>
    <div class="input-group">
        <label>Email</label>
        <input type="email" name="email" value="<?php echo htmlspecialchars($email); ?>">
    </div>
    <div class="input-group">
        <label>Password</label>
        <input type="password" name="password_1">
    </div>
    <div class="input-group">
        <label>Confirm password</label>
        <input type="password" name="password_2">
    </div>
    <div class="input-group">
        <button type="submit" class="btn" name="register_btn">Register</button>
    </div>
    <p>
        <a href="login.php">Sign in</a>
    </p>
</form>
<?php include('footer.php'); ?>