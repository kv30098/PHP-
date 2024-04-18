<html>
<head>
    <meta charset="utf-8">
    <title>高大資管論文投稿系統</title>
</head>
<form action="check.php" method="POST">
<body>
    <h1>高大資管論文投稿系統</h1>
    請選擇你的角色：
    <select name="sDepartment">
    <option value="Chair">Chair
    <option value="Reviewer">Reviewer
    <option value="Author">Author
    </select>
    </br>
    帳號：<input type="text" name="sAccount" value="" required></br>
    密碼：<input type="text" name="sPwd" value="" required></br>
    <input type="submit" value="提交">
</html>

<?php
setcookie("user","User",time()+86400*7,"/");
?>
