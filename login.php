<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Dance Lesson Tracking</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="header">
            <h2>Dance Lesson Tracking</h2>
        </div>
        <form method="post" action="login.php">

            <?php echo display_error(); ?>

            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username" >
            </div>
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password">
            </div>
            <div class="input-group">
                <button type="submit" class="btn" name="login_btn">Login</button>
            </div>
            <p>
                Not yet a member? <a href="register.php">Sign up</a>
            </p>
        </form>
        <span style="text-decoration: underline;">Username / Password</span><br>
        Admin / Password123456!<br>
        User / Password123456!<br>
    </body>
</html>