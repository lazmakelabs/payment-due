<?php 
declare(strict_types=1);

// Empty Input
function is_input_empty(string $name, $date ,string $c_name,int $m_number,string $dept,string $email){
    if (empty($name)|| empty($date) || empty($c_name) || empty($m_number) || empty($dept) || empty($email)){
        return true;
    } else {
        return false;
    }
}
// Invalid_E_mail
function is_email_invalid(string $email){
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        return true;
    } else {
        return false;
    } 
}
// Phoneno invalid
function is_phoneno_invalid(int $phoneno){
    $phstr="$phoneno";
    if (!preg_match("/^\d{1}\d{8}\d{1}$/",$phstr)){
        return true;
    } else {
        return false;
    }
}

function is_email_taken(object $pdo, string $email)
{
    if(get_email($pdo, $email)) {
        return true;
    } else {
        return false;
    }
}

function create_user(object $pdo,string $name, $date ,string $c_name,int $m_number,string $dept,string $email, string $pr_topic,string $pr_type,int $pr_cost,int $ini_pay,string $pay_method, $O_date, $L_date, $remaining)
{
    set_user($pdo, $name, $date , $c_name, $m_number,$dept,$email,$pr_topic,$pr_type,$pr_cost,$ini_pay,$pay_method, $O_date, $L_date, $remaining);
}

