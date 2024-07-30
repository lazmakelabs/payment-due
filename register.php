<?php
require_once "Includes/config_session.inc.php";
require_once "Includes/register_view.inc.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Payment Due</title>
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <div class="logo"><img src="make labs logo.png" alt=""></div>
        <div class="status">
            <a href="index.php" >Login</a>
        </div>
        <header>Registration</header>
        <form action="Includes/register.inc.php" method="post">
            <div class="form first">
                <div class="details personal">
                    
                    <!-- <div class="project-topic">
                        <label>Project Topic :</label>
                        <input type="text" placeholder="Enter project name" name="pr_topic" required>
                    </div> -->
                    <div class="fields">
                        <div class="input-field">
                            <label>Student Name</label>
                            <input type="text" placeholder="Enter your name" name="s_name" required>
                        </div>
                        <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" placeholder="Enter birth date" name="date" required min="2000-01-01" max="2024-07-21">
                        </div>
                        <div class="input-field">
                            <label>College Name</label>
                            <input type="text" placeholder="Enter your College Name" name="c_name" required>
                        </div>
                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="tel" placeholder="Enter mobile number"name="m_number" required>
                        </div>
                        <div class="input-field">
                            <label>Department</label>
                            <input type="text" placeholder="Enter your Department" name="dept" required>
                        </div>
                        <div class="input-field">
                            <label>Email</label>
                            <input type="email" placeholder="Enter your Email" name="email" required>
                        </div>
                    </div>
                </div>
                <div class="details project">
                    <span class="title">Internship Details</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>Title</label>
                            <input type="text" placeholder="Enter your name" name="Title" required>
                        </div>
                        <div class="input-field">
                            <label>Internship duration (in days)</label>
                            <input type="number" placeholder="Duration of course" name="duration" required>
                        </div>
                        <div class="input-field">
                            <label>Joining date </label>
                            <input type="date" placeholder="Joining date" name="J_date" required>
                        </div>
                        <!-- <div class="input-field">
                            <label>Initial Payment ₹ </label>
                            <input type="number" placeholder="Enter Initial Payment ₹" name="ini_pay" required>
                        </div>
                        <div class="input-field">
                            <label>Payment Method</label>
                            <select name="pay_method" required>
                                <option disabled selected>Select Payment</option>
                                <option>Gpay</option>
                                <option>PhonePay</option>
                                <option>Paytm</option>
                                <option>Cash</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>On Date</label>
                            <input type="date" placeholder="Enter issued date" name="O_date" required>
                        </div>
                        <div class="input-field">
                            <label>Last Date</label>
                            <input type="date" placeholder="Enter expiry date" name="L_date" required>
                        </div> -->
                    </div>
                     <button class="nextBtn" type="submit">
                        <span class="btnText">Submit</span>
                    </button>
                </div> 
            </div>
        </form>
</div>

<?php
    check_register_error();
?> 


</body>
</html>