<?php
    require_once "Includes/config_session.inc.php";
    require_once "Includes/login_view.inc.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css"> 
    <link rel="stylesheet" href="css/login.css">
</head>
    <div class="form-container">
        <img src="make labs logo.png" alt="">
        <form action="Includes/login.inc.php" method="post">
            <h2>Admin Login</h2>
            <div class="input-field">
                <label>Username / Phonenumber</label>
                <input type="text" name="username" required>
            </div>
            <div class="input-field">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>
            <button type="submit" class="submitBtn">Login</button>
        </form>
    </div>

<?php
check_login_error();
?>
</body>
</html>
