<?php 

$server = "localhost";
$user = "root";
$pass = "";
include("DBCreate.php");

$db= new CreateDb();

$dbname=$db->get_name();
try {
    $conn = mysqli_connect($server, $user, $pass, $dbname);
} catch (Exception $e) {
    echo "<script>alert('Connection Failed.')</script>";
}


function vemail($email){
    $rez=false;
    if(preg_match("/^[a-z0-9\.\-\_]+@[a-z]+\.[a-z]{2,4}$/", $email))
    {
        $rez=true;
    }
    return $rez;
}

function vpass($pass){
    $rez=false;
    if(preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/", $pass))
    {
        $rez=true;
    }
    return $rez;
}

function vname($name){
    $rez=false;
    if(preg_match("/^([a-zA-Z' ]+)$/", $name))
    {
        $rez=true;
    }
    return $rez;
}


?>