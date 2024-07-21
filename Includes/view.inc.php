<?php
declare(strict_types=1);

if ($_SERVER['REQUEST_METHOD']=="POST"){
    $name=$_POST["Name"];
    $c_name=$_POST["College_name"];
    $dept=$_POST["Department"];

    require_once "dbh.inc.php";
    require_once "login_contr.inc.php";
    // get_data($pdo, $name, $c_name, $dept);
}
