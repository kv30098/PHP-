<?php include 'include.inc';?>

<meta charset="utf-8">
<body>
    <h2>投稿成功！以下是您的個人資料及投稿：</h2>
    <?php
    if (isset($_SESSION["authorcheck"])) {
        if($_SESSION["authorcheck"]="yes"){
            $title=$_POST["aTitle"];
            $summary=$_POST["aSummary"];
            $name=$_POST["aName"];
            $email=$_POST["aEmail"];

            echo "作者姓名：".$name."</br>";
            echo "作者Email：".$email."</br>";
            echo "論文標題：".$title."</br>";
            echo "內容："."</br>".nl2br($summary);
            echo "</br>"."</br>";
        }
    }
    ?>
</body>
<a href="index.php">返回登入頁面</a>