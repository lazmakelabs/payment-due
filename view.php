<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <form action="Includes/view.inc.php" method="post">
        <div class="container1">
            <div class="form first1">
                <div class="details personal1">
                    <div class="fields">
                        <div class="input-field1">
                            <label>Student Name</label>
                            <input type="text" placeholder="Enter your name" name="s_name" required>
                        </div>
                        <div class="input-field1">
                            <label>College Name</label>
                            <input type="text" placeholder="Enter your College Name" name="c_name" required>
                        </div>
                        <div class="input-field1">
                            <label>Department</label>
                            <input type="text" placeholder="Enter your Department" name="dept" required>
                        </div>
                    </div>
                </div>
                <button class="nextBtn1" type="submit">
                    <span class="btnText1">Submit</span>
                </button>
            </div>
        </div>    
    </form>
<?php
    
?>
</body>
</html>