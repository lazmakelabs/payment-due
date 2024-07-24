<?php
if ($_SERVER['REQUEST_METHOD']=="POST"){
    
    $pay_amt= $_POST["pay_amt"];
    $pay_date= $_POST["pay_date"];

    try{
        require_once "dbh.inc.php";
        require_once "config_session.inc.php";
        require_once "update_contr.inc.php";
        require_once "update_view.inc.php";

        $E_mail = $_SESSION["email"];
        
        $result = get_amount($pdo,$E_mail);
        $remaining= $result['remaining'];
        $paid= $result['ini_pay'];
        $p_cost= $result['p_cost'];
        $ID= $result['ID'];

        $errors=[];
        
        if(!$result){
            $errors["Student"]="Student doesn't exist";
        }if($pay_amt<0){
            $errors["negative"]="Amount cannot be negative";
        }if($pay_amt>$remaining){
            $errors["amount"]="Amount cannot be greater than remaining";
        }

        if ($errors){
            $_SESSION["errors_update"]= $errors;
            check_update_error();
            header("Location: ../view.php");
            die();
        }
        
        add_date($pdo, $pay_date, $ID, $pay_amt);
        update_amount($pdo, $p_cost, $paid, $remaining, $pay_amt, $E_mail);
        header("Location: ../view.php");


        $pdo= null;
        $stmt= null;
        die();
    } catch (PDOException $e) {

        die("Query failed:" . $e ->getMessage());
    
    }
}else {
header("Location ../status.php");
}
