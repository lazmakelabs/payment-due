<?php 
declare(strict_types=1);

function set_user(object $pdo,string $name, $date ,string $c_name,int $m_number,string $dept,string $email, string $Title ,int $duration, $J_date)
{
    $query = "INSERT INTO student (s_name ,s_date ,c_name ,m_number ,dept, email, Title, duration, J_date) 
            VALUES (:s_name , :date_s, :c_name, :m_number, :dept, :email, :Title , :duration, :J_date);";
        $stmt = $pdo -> prepare($query);

        $stmt->bindParam(":s_name", $name); 
        $stmt->bindParam(":date_s", $date);
        $stmt->bindParam(":c_name", $c_name);
        $stmt->bindParam(":m_number", $m_number);
        $stmt->bindParam(":dept", $dept);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":Title", $Title); 
        $stmt->bindParam(":duration", $duration);
        $stmt->bindParam(":J_date", $J_date);
        $stmt->execute();
}


function get_email(object $pdo, string $email) {
    $query= "SELECT email FROM student WHERE email= :email;";
    $stmt = $pdo -> prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    $result= $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}


function get_ID(object $pdo, string $email){
    $query= "SELECT ID FROM student WHERE email= :email;";
    $stmt = $pdo -> prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    $result= $stmt->fetch(PDO::FETCH_ASSOC);
    return $result['ID'];
}

function add_date(object $pdo, $date,int $ID,int $pay_amt){
    $query = "Insert into dates (ID, p_date, amount) values (:ID ,:p_date ,:pay_amt)";
    $stmt = $pdo -> prepare($query);
    $stmt->bindParam(":ID", $ID);
    $stmt->bindParam(":p_date", $date);
    $stmt->bindParam(":pay_amt", $pay_amt);
    $stmt->execute();
}