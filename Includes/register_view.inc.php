<?php

declare(strict_types=1);

function check_register_error(){
    if(isset($_SESSION["errors_register"])){
        $errors = $_SESSION["errors_register"];
        echo "<br>";

        foreach ($errors as $error){
            echo "<script>alert('$error')</script>";    
            
        }
        unset($_SESSION["errors_register"]);
        
    }else if (isset($_GET["register"]) && $_GET["register"]=="success"){
        echo "<br>";
        echo '<script>alert("Registration Successful!")</script>';
    }
}