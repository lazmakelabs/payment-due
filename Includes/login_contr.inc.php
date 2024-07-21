<?php 
declare(strict_types=1);

function is_password_correct(string $pass, string $pwd){
    if ($pass==$pwd){
        return true;
    } else {
        return false;
    }
}

// function get_data(object $pdo,string $name,string $c_name,string $dept){
//     $query = "SELECT * FROM login WHERE username = :username;";

//         $stmt = $pdo -> prepare($query);

//         $stmt->bindParam(":username", $username);

//         $stmt->execute();
//         $result = $stmt -> fetch(PDO :: FETCH_ASSOC);
//         return $result;
// }