<head>
    <meta charset="utf-8">
    <title>success.php</title>
</head>
<body>
    <?php
    session_start();
    ?>
    <?php
    if(isset($_SESSION["check"])){
        if($_SESSION["check"]=="Yes"){
            echo "歡迎進入網頁！";
            echo "<a href='logout.php'>登出</a>";
        }else{
            echo "非法進入！";
            echo "將自動轉跳網頁";
            header("Refresh:1;url=https://youtu.be/dQw4w9WgXcQ?si=2ZxWPPY1lLGzk2Gc");
        }
    }

    /*echo "登入成功！網頁將自動返回"."<br/>";
    header("Refresh:1;url=https://youtu.be/dQw4w9WgXcQ?si=2ZxWPPY1lLGzk2Gc")    
    */
    ?>
</body>