<?php
session_start();
?>

<meta charset="uft-8">
<?php

$email1 = "a1117108@mail.com";
$pwd1 = "123";
$email2 = "b1117108@mail.com";
$pwd2 = "1234";
$email3 = "c1117108@mail.com";
$pwd3 = "12345";

$sEmail = $_POST["sEmail"];
$sPwd = $_POST["sPwd"];

if($email1==$sEmail && $pwd1==$sPwd){
    $_SESSION["check"]="yes";
    header("location:enroll.php");
}elseif ($email2==$sEmail && $pwd2==$sPwd) {
    $_SESSION["check"]="yes";
    header("location:enroll2.php");
}elseif ($email3==$sEmail && $pwd3==$sPwd) {
    $_SESSION["check"]="yes";
    header("location:enroll3.php");
}else{
    $_SESSION["check"]="no";
    header("location:fail.php");
}
?>