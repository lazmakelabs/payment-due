<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="form-container1">
        <!-- <img src="make labs logo.png" alt=""> -->
        <div class="status">
            <a href="view.php" >Back</a>
        </div>
        <form method="post" action="Includes/update.inc.php">
            <div class="mode">
                <h2>&emsp;&emsp;&emsp;&nbsp;Update</h2>
                <div class="input-field">
                    <label>Payment amount</label>
                    <input type="text" placeholder="Enter amount" name="pay_amt" required>
                </div> 
                <div class="input-field">
                    <label>Payment date</label>
                    <input type="date" placeholder="Enter date" name="pay_date" required>
                </div>
            </div>
       </form>
    </div>
</body>
</html>




