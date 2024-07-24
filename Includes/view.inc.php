<?php
if ($_SERVER['REQUEST_METHOD']=="POST"){
    $s_name=$_POST["s_name"];
    $c_name=$_POST["c_name"];
    $dept=$_POST["dept"];

    try {
        require_once "config_session.inc.php";
        require_once "dbh.inc.php";
        require_once "view_model.inc.php";
        require_once "view_contr.inc.php";
        $result=get_data($pdo, $s_name, $c_name, $dept);

    $errors=[];

    $ID= $result['ID'];
    $E_mail= $result['email'];
    
    if (!student_exist($result)){
        $errors["student"]= "Student doesn't exist";
    }else{
        $dates=get_date($pdo, $ID);
        $_SESSION['result']=$result;
        $_SESSION['dates']=$dates;
        $_SESSION['email']= $E_mail;
    }

    if ($errors){
        $_SESSION["errors_view"]= $errors;
        header("Location: ../view.php");
        die();
    }    

    $pdo=null;
    $stmt=null;

    header("Location: ../status.php");
    die();
    }
    catch (PDOException $e) {

        die("Query failed:" . $e ->getMessage());
    }
} else {
        header("Location ../view.php");
        die();
}