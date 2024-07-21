<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST["username"];
    $pass=$_POST["password"];

    try {
    require_once "dbh.inc.php";
    require_once "login_model.inc.php";
    require_once "login_contr.inc.php";


    $result = get_user($pdo, $username);

    // errors
    $error=[];
    if (!$result){
        $error["account"]="Account does'nt exist.";
    }else{
        $pwd = $result["passwrd"];
        if (!is_password_correct($pass, $pwd)){
            $errors["Password"]="Incorrect credentials";
        }
    }
    
    require_once "login_view.inc.php";
    


    if ($error){
        $_SESSION["errors_register"]= $error;
        header("Location: ../index.php");
        die();
    }

    $pdo=null;
    $stmt=null;

    header("Location: ../middle.php?login=success");
    die();
    }
    catch (PDOException $e) {

        die("Query failed:" . $e ->getMessage());
    }
} else {
        header("Location ../index.php");
        die();
}