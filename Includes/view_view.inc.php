<?php

declare(strict_types=1);

function check_view_error(){
    if(isset($_SESSION["errors_view"])){
        $errors = $_SESSION["errors_view"];

        foreach ($errors as $error){
            echo $error;
            
        }
        unset($_SESSION["errors_view"]);
        
    }
}