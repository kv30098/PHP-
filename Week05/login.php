<html>
<head>
    <meta charset="utf-8">
    <title>login.php</title>
</head>
<form method="get" action="check.php">
<body>
    帳號：<input type="text" name="sAccount" value="" require><br/>
    密碼：<input type="text" name="sPwd" value="" require><br/>
    <br/>
    <input type="submit" value="登入"><br/>
    <?php
    date_default_timezone_set("Asia/Taipei");
    echo date("Y/M/D H:i:s");
    ?>
</body>
</form>
</html>