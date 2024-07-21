<?php 
declare(strict_types=1);

function set_user(object $pdo,string $name, $date ,string $c_name,int $m_number,string $dept,string $email)
{
    $query = "INSERT INTO student (s_name ,s_date ,c_name ,m_number ,dept, email) VALUES (:s_name , :date_s, :c_name, :m_number, :dept, :email);";
        $stmt = $pdo -> prepare($query);

        $stmt->bindParam(":s_name", $name); 
        $stmt->bindParam(":date_s", $date);
        $stmt->bindParam(":c_name", $c_name);
        $stmt->bindParam(":m_number", $m_number);
        $stmt->bindParam(":dept", $dept);
        $stmt->bindParam(":email", $email);

        $stmt->execute();
}


function set_project(object $pdo, string $pr_topic,string $pr_type,int $pr_cost,int $ini_pay,string $pay_method, $O_date, $L_date, string $email)
{
    $query = "INSERT INTO project (topic ,p_type ,p_cost ,ini_pay ,p_method, on_date, l_date, email) VALUES (:topic , :p_type, :p_cost, :ini_pay, :p_method, :on_date, :l_date, :email);";
        $stmt = $pdo -> prepare($query);

        $stmt->bindParam(":topic", $pr_topic); 
        $stmt->bindParam(":p_type", $pr_type);
        $stmt->bindParam(":p_cost", $pr_cost);
        $stmt->bindParam(":ini_pay", $ini_pay);
        $stmt->bindParam(":p_method", $pay_method);
        $stmt->bindParam(":on_date", $O_date);
        $stmt->bindParam(":l_date", $O_date);
        $stmt->bindParam(":email", $email);

        $stmt->execute();
}


function set_members(object $pdo, string $m_1, string $m_2, string $m_3, string $m_4, string $m_5, string $m_6)
{
    $query = "INSERT INTO members (m_1,m_2,m_3,m_4,m_5,m_6) VALUES (:m_1,:m_2,:m_3,:m_4,:m_5,:m_6);";
        $stmt = $pdo -> prepare($query);

        $stmt->bindParam(":m_1", $m_1); 
        $stmt->bindParam(":m_2", $m_2);
        $stmt->bindParam(":m_3", $m_3);
        $stmt->bindParam(":m_4", $m_4);
        $stmt->bindParam(":m_5", $m_5);
        $stmt->bindParam(":m_6", $m_6);

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
