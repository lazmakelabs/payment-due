<?php

declare(strict_types=1);

function check_update_error(){
    if(isset($_SESSION["errors_update"])){
        $errors = $_SESSION["errors_update"];

        foreach ($errors as $error){
            echo "<script>alert('$error')</script>";   
            
        }
        unset($_SESSION["errors_update"]);
        
    }
}