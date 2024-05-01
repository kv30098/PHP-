<meta charset="utf-8">

<?php
$name = $_POST["sName"];
$dep = $_POST["sDep"];
//連結資料庫
$link = @mysqli_connect('localhost','root','kaivei30098','test');

$SQL = "INSERT INTO student(Name, Department) VALUES('$name', '$dep')";

if($result = mysqli_query($link, $SQL)){
    echo "新增成功<br/>";
}
echo "<br/><a href=index.php>查看資料庫資料</a>";