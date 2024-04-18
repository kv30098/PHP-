<?php include 'include.inc';?>

<meta charset="uft-8">
<?php

$account1 = "chair";
$pwd1 = "123";
$account2 = "reviewer";
$pwd2 = "234";
$account3 = "author";
$pwd3 = "345";

$Charactor = $_POST["sDepartment"];
$Account = $_POST["sAccount"];
$Pwd = $_POST["sPwd"];

if($Account==$account1 && $Pwd==$pwd1 && $Charactor == "Chair"){
    setcookie("user",$_POST["$Account"],time()+86400*7,"/");
    $_SESSION["check"]="yes";
    header("location:chair.php");
}elseif($Account==$account2 && $Pwd==$pwd2 && $Charactor == "Reviewer"){
    setcookie("user",$_POST["$Account"],time()+86400*7,"/");
    $_SESSION["check"]="yes";
    header("location:reviewer.php");
}elseif($Account==$account3 && $Pwd==$pwd3 && $Charactor == "Author"){
    setcookie("user",$_POST["$Account"],time()+86400*7,"/");
    $_SESSION["check"]="yes";
    header("location:author.php");
}else {
    $_SESSION["check"]="no";
    header("location:fail.php");
}
?>