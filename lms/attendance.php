<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="Static/css/attendance.css">
</head>
<body>
    <div class="form-container1">
        <img src="make labs logo.png" alt="">
        <form method="post" action="Includes/attendance.inc.php">
            <div class="mode">
                <h2>&emsp;&emsp;&emsp;&nbsp;Welcome</h2>
                <br>
                <label for="Present">Present</label>
                <input type="radio" name="attend" value="Present" id="Present" required>
                <label for="Absent">Absent</label>
                <input type="radio" name="attend" value="Absent" id="Absent" required>
            </div>
        <button type="submit" id="submit-btn">Submit</button>
       </form>
    </div>
</body>
</html>
