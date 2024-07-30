<?php
if ($_SERVER['REQUEST_METHOD']=="POST")
{ 
    echo "request_method";
    try{
        require_once "attendance.contr.php";
        require_once "config_session.inc.php";
        require_once "dbh.inc.php";
        echo "Outside isset";
        if(isset($_SESSION["success"]))
        {
            $email= $_SESSION['email'];
            $date = date("Y/m/d");

            $attend= htmlspecialchars($_POST["attend"]);
            
            save_date($pdo, $date, $attend, $email);
            header("Location ../attendance.php?attendance=success");

            $pdo=null;
            $stmt=null;
            die();
        }else {
            header("Location ../login.html");
        } 
    }
        catch (PDOException $e) {

            die("Query failed:" . $e ->getMessage());
        }

   }else {
        header("Location: ../attendace.php");
        die();
    }
