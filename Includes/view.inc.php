<?php
declare(strict_types=1);

function get_data(object $pdo,string $s_name, string $c_name,string $dept){
    $query = "SELECT * FROM login WHERE username = :username;";

        $stmt = $pdo -> prepare($query);

        $stmt->bindParam(":username", $s_name);

        $stmt->execute();
        $result = $stmt -> fetch(PDO :: FETCH_ASSOC);
        return $result;
}
