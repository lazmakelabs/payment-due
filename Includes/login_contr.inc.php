<?php 
declare(strict_types=1);

function is_password_correct(string $pass, string $pwd){
    if ($pass==$pwd){
        return true;
    } else {
        return false;
    }
}
