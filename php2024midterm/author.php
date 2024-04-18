<?php include 'include.inc';?>
<html>
<head>
    <meta charset="utf-8">
    <title>高大資管論文投稿系統</title>
</head>
<form action="showpaper.php" method="POST">
<body>
    <h1>Author您好，歡迎進入論文投稿網頁</h1>
    論文標題：<input type="text" name="aTitle" value="" required></br>
    作者姓名：<input type="text" name="aName" value="" required></br>
    作者Email：<input type="text" name="aEmail" value="" required></br>
    </br>
    論文摘要：
    <textarea name="aSummary" value="" rows="50" cols="100"></textarea>
    </br></br>
    <input type="submit" value="提交">
    </br></br>
    <a href="index.php">返回登入頁面</a>
</body>
</html>
<?php
$_SESSION["authorcheck"]="yes";
?>