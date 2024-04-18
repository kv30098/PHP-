<?php include 'include.inc';?>

<meta charset="utf-8">
<body>
    <h2>投稿成功！以下是您的評論：</h2>
    <?php
    if (isset($_SESSION["viewcheck"])) {
        if($_SESSION["viewcheck"]="yes"){
            $comment=$_POST["sComment"];
            $dicision=$_POST["sDecision"];
            echo "論文評審決定：".$dicision."</br>";
            echo "內容："."</br>".nl2br($comment);
            echo "<br>"."<br>";
        }
    }
    ?>
</body>
<a href="index.php">返回登入頁面</a>