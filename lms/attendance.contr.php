<?php

declare(strict_types=1);


function save_date(object $pdo, $date,string $attend,string $email){
    $query = "INSERT INTO attendance (E_mail, attend, t_Date) VALUES (:E_mail, :attend, :t_Date);";

    $stmt = $pdo -> prepare($query);
    $stmt->bindParam(":attend", $attend); 
    $stmt->bindParam(":t_Date", $date);
    $stmt->bindParam(":E_mail", $email);

    $stmt->execute();
}