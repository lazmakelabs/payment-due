<?php

declare(strict_types=1);

function check_login_error(){
    if(isset($_SESSION["errors_login"])){
        $errors = $_SESSION["errors_login"];
        echo "<br>";

        foreach ($errors as $error){
            echo "<script>alert('$error')</script>";    
        }
        unset($_SESSION["errors_login"]);
        
    }
    else if (isset($_GET["login"]) && $_GET["login"]=="success"){
        echo "<br>";
        echo '<script>alert("Login Successful!")</script>';
    }
}