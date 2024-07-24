<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST["username"];
    $pass=$_POST["password"];

    try {
    require_once "config_session.inc.php";
    require_once "dbh.inc.php";
    require_once "login_model.inc.php";
    require_once "login_contr.inc.php";


    $result = get_user($pdo, $username);

    // errors
    $errors=[];
    if (!$result){
        $errors["account"]="Account does'nt exist.";
    }else{
        $pwd = $result["passwrd"];
        if (!is_password_correct($pass, $pwd)){
            $errors["pass"]="Incorrect credentials";
        }
    }

    require_once "login_view.inc.php";
    


    if ($errors){
        $_SESSION["errors_login"]= $errors;
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