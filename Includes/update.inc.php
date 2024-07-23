<?php
if ($_SERVER['REQUEST_METHOD']=="POST"){
    
    $pay_amt= $_POST["pay_amt"];

    try{
        require_once "dbh.inc.php";
        require_once "config_session.inc.php";
        require_once "update_contr.inc.php";

        $E_mail = $_SESSION["email"];
        
        $result = get_amount($pdo,$E_mail);
        $remaining= $result['remaining'];
        $paid= $result['ini_pay'];
        $p_cost= $result['p_cost'];

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
