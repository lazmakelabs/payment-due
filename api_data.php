<?php

$dsn = "mysql:host=localhost; dbname=project register;";
$dbusername ="root";
$dbpassword ="makelabs";

$pdo = new PDO($dsn, $dbusername, $dbpassword);
$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

function  getCollege($id=Null){
    global $pdo;
    if($id==Null) {
        $query = "SELECT distinct c_name FROM student";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $colleges = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $colleges;
    }
    else {
        $query = "SELECT distinct c_name FROM student WHERE :id";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $colleges = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $colleges;
    }

}

function  getDepartment($c_name){
    global $pdo;
    if($c_name==Null) {
        $query="SELECT distinct dept FROM student";

        $stmt = $pdo -> prepare($query);
        $stmt -> execute();
        $departments = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $departments;
    }
    else{
        $query="SELECT distinct dept FROM student WHERE c_name=:c_name";

        $stmt = $pdo -> prepare($query);
        $stmt -> bindParam(":c_name",$c_name);
        $stmt -> execute();
        $departments = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $departments;
    }
}

function  getName($dept, $c_name){
    global $pdo;
    if($dept==Null) {
        $query = "SELECT distinct s_name FROM student";

        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":dept", $dept);
        $stmt->execute();
        $names = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $names;
    }else {
        $query = "SELECT distinct s_name FROM student WHERE dept=:dept and c_name=:c_name";

        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":dept", $dept);
        $stmt->bindParam(":c_name",$c_name);
        $stmt->execute();
        $names = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $names;
    }
}



if(isset($_REQUEST['type'])){
    if($_REQUEST['type']== 'department'){
        echo json_encode(getdepartment($_REQUEST['c_name']));
    }
    else if($_REQUEST['type']== 'name'){
        echo json_encode(getName($_REQUEST['dept'],$_REQUEST['c_name']));
    }
} else {
    echo json_encode(getCollege());
}