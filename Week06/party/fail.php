<meta charset="utf-8">

<?php
echo "郵件或密碼錯誤！"."<br/>";
echo "系統將在3秒後自動返回";
header("Refresh:3;url=login.php");
?>