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


if ($_SERVER['REQUEST_METHOD']=="POST"){
    $s_name=$_POST["s_name"];
    $c_name=$_POST["c_name"];
    $dept=$_POST["dept"];

    require_once "dbh.inc.php";
    $result=get_data($pdo, $s_name, $c_name, $dept);
    $Name= $result["s_name"];
    $Mobile = $result["m_number"];
    $E_mail= $result["email"];
    $ID= $result["ID"];
    $pr_topic= $result["topic"];
    $p_type= $result["p_type"];
    $p_cost= $result["p_cost"];
    $ini_pay=$result["ini_pay"];
    $pay_method=$result["p_method"];
    $on_date= $result["on_date"];
    $L_date= $result["l_date"];
    $remaining= $p_cost-$ini_pay;

    echo"<p>Name:$Name</p>"."<br>";
    echo"<p>Mobile:$Mobile</p>"."<br>";
    echo"<p>E_mail:$E_mail</p>"."<br>";
    echo"<p>Project ID:$ID</p>"."<br>";
    echo"<p>Project Topic:$pr_topic</p>"."<br>";
    echo"<p>Cost:$p_cost</p>"."<br>";
    echo"<p>Remaining:$remaining</p>"."<br>";
    echo"<p>Payment:$pay_method</p>"."<br>";
    echo"<p>Start date:$on_date</p>"."<br>";
    echo"<p>Deadline:$L_date</p>"."<br>";
}else {
    header("Location ../register.php");
    die();
}