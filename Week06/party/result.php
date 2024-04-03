<?php
session_start();
?>
<meta charset="utf-8">
<link rel=stylesheet type="text/css" href="style2.css">
<body>
    <div class="center">
        <h1>高大資管系報名晚會</h1>
    </div>
    <hr class="divider">
    <center><h2>報名成功！</h2><center>
    <center><h2>請確認資料是否無誤</h2><center><br/>
    <div class="center">

<?php

$name=$_POST["sName"];
$sid=$_POST["sStuId"];
$grade=$_POST["sGrade"];
$gender=$_POST["sGender"];
$color=$_POST["sColor"];
$OD=$_POST["sNumber"];
$depart=$_POST["sDepartment"];
$comment=$_POST["sComment"];

echo "姓名：".$name."<br/>";
echo "學號：".$sid."<br/>";
echo "年級：".$grade."<br/>";
echo "性別：".$gender."<br/>";
echo "飲料：";
foreach($_POST["sBaverage"] as $baverage){
    echo $baverage." ";
}
echo "<br/>組別顏色：".$color."<br/>";
echo "外系報名人數：".$OD."<br/>";
echo "外系系所：".$depart."<br/>";
echo "附註：".$comment."<br/>";
?>
<center><a href="login.php">報名完成，返回登入頁面</a></center>
    </div>
</body>