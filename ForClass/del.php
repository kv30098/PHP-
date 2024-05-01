<meta charset="utf-8">

<?php
$no = $_GET["No"];
//連結資料庫
$link = @mysqli_connect('localhost','root','kaivei30098','test');

$SQL = "DELETE FROM student WHERE NO = '$no'";

if($result = mysqli_query($link, $SQL)){
    echo "刪除成功<br/>";
}
echo "<br/><a href=index.php>查看資料庫資料</a>";