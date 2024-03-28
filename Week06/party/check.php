<?php
session_start();
?>

<meta charset="uft-8">
<?php

$email = "a1117108@mail.com";
$pwd = "123";

$sEmail = $_POST["sEmail"];
$sPwd = $_POST["sPwd"];

if($email==$sEmail && $pwd==$sPwd){
    $_SESSION["check"]="yes";
    header("location:enroll.php");
}else{
    $_SESSION["check"]="no";
    header("location:fail.php");
}
?>