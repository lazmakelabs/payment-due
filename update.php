<?php
    require_once "Includes/config_session.inc.php";
    require_once "Includes/update_view.inc.php";
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
<body>
<form action="Includes/update.inc.php" method="post">
        <div class="container1">
        <div class="status">
            <a href="middle.php">Back</a>
        </div>
            <div class="form first1">
            <h2>Update</h2>
                <div class="details personal1">
                    <div class="fields">
                        <div class="input-field1">
                            <label>Payment Amount</label>
                            <input type="number" placeholder="Enter amount" name="pay_amt" required>
                        </div>
                        <div class="input-field1">
                            <label>Date</label>
                            <input type="date" placeholder="Date" name="pay_date" required>
                        </div>
                    </div>
                </div>
                <button class="nextBtn1" type="submit">
                    <span class="btnText1">Submit</span>
                </button>
            </div>
        </div>
        <?php
    check_update_error()
    ?>    
    </form>
</body>
</html>




