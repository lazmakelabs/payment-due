<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Payment Due</title>
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
<?php
    require_once "Includes/config_session.inc.php";
    $result=$_SESSION['result'];
    $dates=$_SESSION['dates'];
    $s_name= $result["s_name"];
    $c_name= $result["c_name"];
    $dept=$result["dept"];
    $Mobile = $result["m_number"];
    $E_mail= $result["email"];
    $ID= $result["ID"];
    $date= $result["s_date"];
    $pr_topic= $result["topic"];
    $p_type= $result["p_type"];
    $p_cost= $result["p_cost"];
    $ini_pay=$result["ini_pay"];
    $pay_method=$result["p_method"];
    $on_date= $result["on_date"];
    $L_date= $result["l_date"];
    $remaining= $p_cost-$ini_pay;

?>
<div class="container">
    <div class="logo"><img src="make labs logo.png" alt=""></div>
        <div class="status">
            <a href="view.php" >Back</a>
        </div>
        <header>Status</header>
        <form action="update.php" method="post">
            <div class="form first">
                <div class="details personal">
                    
                    <div class="project-topic">
                    <div class="input-field"></div>    
                        <label>Project Topic :</label>
                        <?php echo"<p>".htmlspecialchars($pr_topic)."</p>"; ?>
                        <label>Project ID :</label>
                        <?php echo"<p>".htmlspecialchars($ID)."</p>"; ?>
                    </div>
                    <div class="fields">
                        <div class="input-field">
                            <label>Student Name</label>
                            <?php echo"<p>".htmlspecialchars($s_name)."</p>"; ?>
                        </div>
                        <div class="input-field">
                            <label>College Name</label>
                            <?php echo"<p>".htmlspecialchars($c_name)."</p>"; ?>
                        </div>
                        <div class="input-field">
                            <label>Mobile Number</label>
                            <?php echo"<p>".htmlspecialchars($Mobile)."</p>"; ?>
                        </div>
                        <div class="input-field">
                            <label>Department</label>
                            <?php echo"<p>".htmlspecialchars($dept)."</p>"; ?>
                        </div>
                        <div class="input-field">
                            <label>Email</label>
                            <?php echo"<p>".htmlspecialchars($E_mail)."</p>"; ?>
                        </div>
                        <div class="input-field">
                            <label>Date of birth</label>
                            <?php echo"<p>".htmlspecialchars($date)."</p>"; ?>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="details project">
                    <span class="title">Project Details</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>Project Type</label>
                            <?php echo"<p>".htmlspecialchars($p_type)."</p>"; ?>
                        </div>
                        <div class="input-field">
                            <label>Project Cost ₹ </label>
                            <?php echo"<p  class='blue'>".htmlspecialchars($p_cost)."</p>"; ?>
                        </div>
                        <div class="input-field">
                            <label>Paid Amount ₹ </label>
                            <?php echo"<p class='green'>".htmlspecialchars($ini_pay)."</p>"; ?>
                        </div>
                        <div class="input-field">
                            <label>Remaining Payment </label>
                            <?php echo"<p  class='red'>".htmlspecialchars($remaining)."</p>"; ?>
                        </div>
                        <div class="input-field">
                            <label>Payment Method</label>
                            <?php echo"<p>".htmlspecialchars($pay_method)."</p>"; ?>
                        </div>
                        <div class="input-field">
                            <label>On Date</label>
                            <?php echo"<p>".htmlspecialchars($on_date)."</p>"; ?>
                        </div>
                        <div class="input-field">
                            <label>Last Date</label>
                            <?php echo"<p>".htmlspecialchars($L_date)."</p>"; ?>
                        </div>
                        <div class="input-field">
                            <label>Pay Date</label>
                            <div class="scrollbox">
                                <?php if (empty($dates)): ?>
                                    <p>No dates found for this ID.</p>
                                <?php else: ?>
                                    <ul>
                                        <?php foreach ($dates as $date): ?>
                                            <li><?php echo htmlspecialchars($date); ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>
                            </div> 
                        </div>
                    </div>
                    <hr>
                    <button class="nextBtn" type="submit">
                        <span class="btnText">Update payment</span>
                    </button>
                </div> 
            </div>
        </form>
</div>


</body>
</html>