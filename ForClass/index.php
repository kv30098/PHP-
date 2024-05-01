<meta charset="utf-8">

<?php

//連結資料庫
$link = @mysqli_connect('localhost','root','kaivei30098','test');

$SQL = "SELECT * FROM student";

if (!$link) {
    die ("資料庫開啟失敗!<br/>");
}else{
    echo "資料庫開啟成功!<br/>";
}

$result = mysqli_query($link, $SQL);

echo "<table border = 1>";
while($row = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>".$row["No"]."</td><td>".$row["Name"]."</td><td>".$row["Department"]."</td><td><a href='del.php?=No".$row["No"]."'>刪除</a></td><td>修改</td>";
    echo "</tr>";
}
echo "</table>";

echo "<a href = add.php>新增資料</a>";
mysqli_close($link);
?>