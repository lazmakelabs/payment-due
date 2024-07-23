<?php
declare(strict_types=1);

function get_data(object $pdo,string $s_name, string $c_name,string $dept){
    $query = "SELECT * FROM student WHERE s_name= :s_name AND c_name=:c_name AND dept=:dept";

        $stmt = $pdo -> prepare($query);

        $stmt->bindParam(":s_name", $s_name);
        $stmt->bindParam(":c_name", $c_name);
        $stmt->bindParam(":dept", $dept);

        $stmt->execute();
        $result = $stmt -> fetch(PDO :: FETCH_ASSOC);
        return $result;
}

