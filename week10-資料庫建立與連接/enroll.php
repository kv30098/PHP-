<html>
<head>
    <meta charset="utf-8">
    <title>報名表單</title>
    <link rel=stylesheet type="text/css" href="style2.css">
</head>
<form action="result.php" method="post">
<body>
    <div class="center">
        <h1>高大資管系晚會報名系統</h1>
    </div>
    <hr class="divider">
    <div class="center">
        <h3>
        姓名：<input type="text" name="sName" value="" required><br/>
        學號：<input type="text" name="sStuId" value="" required><br/>
        年級：
        <input type="radio" name="sGrade" value="大一">大一
        <input type="radio" name="sGrade" value="大二">大二
        <input type="radio" name="sGrade" value="大三">大三
        <input type="radio" name="sGrade" value="大四">大四
        <br/>
        性別：
        <input type="radio" name="sGender" value="男生">男生
        <input type="radio" name="sGender" value="女生">女生
        </br>
        飲料偏好：
        <input type="checkbox" name="sBaverage[]" value="汽水">汽水
        <input type="checkbox" name="sBaverage[]" value="調酒">調酒
        <input type="checkbox" name="sBaverage[]" value="果汁">果汁
        <input type="checkbox" name="sBaverage[]" value="茶類">茶類
        <br/>
        想要的組別顏色偏好：
        <input type="color" name="sColor" value=""><br/>
        其他附註：
        <textarea name="sComment" value="" rows="5" cols="20"></textarea><br/>

        <input type="submit" value="送出">
        <input type="reset" value="清除所有"></h3>
</body>
</html>