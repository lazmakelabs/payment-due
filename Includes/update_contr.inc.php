<?php
declare(strict_types=1);

function get_amount($pdo,$E_mail){
        $query = "SELECT * FROM student WHERE email = :email;";
    
        $stmt = $pdo -> prepare($query);
    
        $stmt->bindParam(":email", $E_mail);
    
        $stmt->execute();
        $result = $stmt -> fetch(PDO :: FETCH_ASSOC);
        return $result;
    }

function update_amount(object $pdo,int $cost,int $paid,int $remaining, int $pay_amt, string $E_mail){
    
    $paid= $paid + $pay_amt;
    $remaining = $cost - $paid;

    $query = "UPDATE student set p_cost= :cost, ini_pay= :paid , remaining= :remaining Where email= :email";
    $stmt = $pdo -> prepare($query);
    $stmt->bindParam(":cost", $cost);
    $stmt->bindParam(":paid", $paid);
    $stmt->bindParam(":remaining", $remaining);
    $stmt->bindParam(":email", $E_mail);
    $stmt->execute();
}
