<?php

declare(strict_types=1);

function check_update_error(){
    if(isset($_SESSION["errors_update"])){
        $errors = $_SESSION["errors_update"];
        echo "<br>";

        foreach ($errors as $error){
            echo $error;    
            
        }
        unset($_SESSION["errors_update"]);
        
    }
}