<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    // Student details
    $name= $_POST["s_name"];
    $date= $_POST["date"];
    $c_name= $_POST["c_name"];
    $m_number= $_POST["m_number"];
    $dept= $_POST["dept"];
    $email=$_POST["email"];
    // Project details
    $pr_topic=$_POST["pr_topic"];
    $pr_type=$_POST["pr_type"];
    $pr_cost=$_POST["pr_cost"];
    $ini_pay=$_POST["ini_pay"];
    $pay_method=$_POST["pay_method"];
    $O_date=$_POST["O_date"];
    $L_date=$_POST["L_date"];
    $remaining=$pr_cost-$ini_pay;

    try {
        require_once "dbh.inc.php";
        require_once "register_model.inc.php";
        require_once "register_contr.inc.php";
        require_once "config_session.inc.php";


        // Error Handler
        $errors=[];

        require_once "register_view.inc.php";

        if(is_input_empty($name, $date , $c_name, $m_number, $dept, $email)){
            $errors["empty_input"]="Fill in all fields!";
        }
        if(is_email_invalid($email)){
            $errors["invalid_email"]= "Invalid email ID!";
        }
        if(is_phoneno_invalid($m_number)){
            $errors["invalid_phoneno"]="Phone Number is invalid!";
        }

        if ($errors){
            $_SESSION["errors_register"]= $errors;
            header("Location: ../register.php");
            die();
        }

        create_user($pdo, $name, $date , $c_name, $m_number, $dept, $email, $pr_topic, $pr_type, $pr_cost, $ini_pay, $pay_method, $O_date, $L_date, $remaining);
        $ID=get_ID($pdo, $email);
        add_date($pdo,$O_date,$ID,$ini_pay);

        header("Location: ../register.php?register=success");

        $pdo = null;
        $stmt = null;

        die();
        
    } catch (PDOException $e) {

    die("Query failed:" . $e ->getMessage());

    }


} 
else {
    header("Location ../register.php");
    die();
}