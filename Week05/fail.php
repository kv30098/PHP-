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
        if($_SESSION["check"]=="No"){
            echo "登入失敗！網頁將自動返回"."<br/>";
            header("Refresh:1;url=https://www.nuk.edu.tw/");   
        }
    }
    /*echo "登入失敗！網頁將自動返回"."<br/>";
    header("Refresh:1;url=https://www.nuk.edu.tw/")    
    */
    ?>
</body>