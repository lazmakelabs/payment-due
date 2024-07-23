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
require_once "Includes/view.inc.php";

if ($_SERVER['REQUEST_METHOD']=="POST"){
    $s_name=$_POST["s_name"];
    $c_name=$_POST["c_name"];
    $dept=$_POST["dept"];

    require_once "Includes/dbh.inc.php";
    $result=get_data($pdo, $s_name, $c_name, $dept);
    $Name= $result["s_name"];
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
}else {
    header("Location ../register.php");
    die();
}
?>

<div class="container">
    <div class="logo"><img src="make labs logo.png" alt=""></div>
        <div class="status">
            <a href="view.php" >Back</a>
        </div>
        <header>Registration</header>
        <form action="Includes/register.inc.php" method="post">
            <div class="form first">
                <div class="details personal">
                    
                    <div class="project-topic">
                        <label>Project Topic :</label>
                        <?php echo"<p>".$pr_topic."</p>"; ?>
                    </div>
                    <div class="fields">
                        <div class="input-field">
                            <label>Student Name</label>
                            <?php echo"<p>".$s_name."</p>"; ?>
                        </div>
                        <div class="input-field">
                            <label>College Name</label>
                            <?php echo"<p>".$c_name."</p>"; ?>
                        </div>
                        <div class="input-field">
                            <label>Mobile Number</label>
                            <?php echo"<p>".$Mobile."</p>"; ?>
                        </div>
                        <div class="input-field">
                            <label>Department</label>
                            <?php echo"<p>".$dept."</p>"; ?>
                        </div>
                        <div class="input-field">
                            <label>Email</label>
                            <?php echo"<p>".$E_mail."</p>"; ?>
                        </div>
                        <div class="input-field">
                            <label>Date of birth</label>
                            <?php echo"<p>".$date."</p>"; ?>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="details project">
                    <span class="title">Project Details</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>Project Type</label>
                            <?php echo"<p>".$p_type."</p>"; ?>
                        </div>
                        <div class="input-field">
                            <label>Project Cost ₹ </label>
                            <?php echo"<p>".$p_cost."</p>"; ?>
                        </div>
                        <div class="input-field">
                            <label>Initial payment ₹ </label>
                            <?php echo"<p>".$ini_pay."</p>"; ?>
                        </div>
                        <div class="input-field">
                            <label>Remaining Payment </label>
                            <?php echo"<p>".$remaining."</p>"; ?>
                        </div>
                        <div class="input-field">
                            <label>Payment Method</label>
                            <?php echo"<p>".$pay_method."</p>"; ?>
                        </div>
                        <div class="input-field">
                            <label>On Date</label>
                            <?php echo"<p>".$on_date."</p>"; ?>
                        </div>
                        <div class="input-field">
                            <label>Last Date</label>
                            <?php echo"<p>".$L_date."</p>"; ?>
                        </div>
                    </div>
                </div> 
                <hr>
            </div>
        </form>
</div>

<?php
    require_once "Includes/register_view.inc.php";
    check_register_error();
?> 
<script src="script.js"></script>

</body>
</html>