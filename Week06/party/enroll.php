<html>
<head>
    <meta charset="utf-8">
    <title>報名表單</title>
    <link rel=stylesheet type="text/css" href="style2.css">
</head>
<form action="result.php" method="post">
<body>
    <div class="center">
        <h1>高大資管系報名晚會</h1>
    </div>
    <hr class="divider">
    <div class="center">
        <h3>
        姓名：<input type="text" name="sName" value=""><br/>
        學號：<input type="text" name="sStuId" value=""><br/>
        年級：
        <input type="radio" name="sGrade" value="freshman">大一
        <input type="radio" name="sGrade" value="sophomore">大二
        <input type="radio" name="sGrade" value="junior">大三
        <input type="radio" name="sGrade" value="senior">大四
        <br/>
        性別：
        <input type="radio" name="sGender" value="male">男生
        <input type="radio" name="sGender" value="Female">女生
        </br>
        飲料偏好：
        <input type="checkbox" name="sDrink" value="soda">汽水
        <input type="checkbox" name="sBaverage" value="alcohol">調酒
        <input type="checkbox" name="sBaverage" value="juice">果汁
        <input type="checkbox" name="sBaverage" value="tea">茶類
        <br/>
        想要的組別顏色偏好：
        <input type="color" name="sColor" value=""><br/>
        有外系報名者？幾人？
        <input type="number" name="sNumber" step="1" min="0" max="4" value=""><br/><br/>
        外系報名者系所：
        <select name="sDepartment" multiple>
            <option value="ABA">亞太系
            <option value="AE">應金系
            <option value="FI">金管系
            <option value="WLL">西語系
        </select><br/>
        其他附註：
        <textarea name="sComment" value="" rows="5" cols="20"></textarea><br/>

        <input type="submit" value="送出">
        <input type="reset" value="清除所有"></h3>
</body>
</html>