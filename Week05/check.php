<head>
    <meta charset="utf-8">
    <title>check.php</title>
</head>
<body>
    <?php
    session_start();
    ?>
    <?php
    $sID="123";
    $sPwd="456";

    $account=$_GET["sAccount"];
    $Pwd = $_GET["sPwd"];

    if($sID==$account && $sPwd==$Pwd){
        $_SESSION["check"]="Yes";
        header("location:success.php");
    }else{
        $_SESSION["check"]="No";
        header("location:success.php");
    }

    /*echo "帳號：".$account."<br/>";
    echo "密碼：".$Pwd."<br/>";*/
    ?>
</body>