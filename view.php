<?php
require_once "Includes/config_session.inc.php";
require_once "Includes/view_view.inc.php";
?>

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
        <div class="status">
            <a href="middle.php" >Back</a>
        </div>
            <div class="form first1">
                <div class="details personal1">
                    <div class="fields">
                        <div class="input-field1">
                            <label>College Name</label>
                            <select type="text" placeholder="College name" name="c_name" id="college" required>
                                
                            </select>
                        </div>
                        <div class="input-field1">
                            <label>Department</label>
                            <select id="department" type="text" placeholder="Department Name" name="dept" required></select>
                        </div>
                        <div class="input-field1">
                            <label>Name</label>
                            <select id="name" type="text" placeholder="Student Name" name="s_name" required></select>
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
check_view_error();
?>
<script src="script.js"></script>
</body>
</html>