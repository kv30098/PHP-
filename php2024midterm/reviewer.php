<?php include 'include.inc';?>
<html>
<head>
    <meta charset="utf-8">
    <title>高大資管論文投稿系統</title>
</head>
<form action="showreview.php" method="POST">
<body>
    <h1>Reviewer您好，歡迎進入論文評論網頁</h1>
    <h4>論文評審決定：
    <input type="radio" name="sDecision" value="Accept">Accept
    <input type="radio" name="sDecision" value="Minor Revision">Minor Revision
    <input type="radio" name="sDecision" value="Major Revision">Major Revision
    <input type="radio" name="sDecision" value="Reject">Reject
    </h4></br>
    <h4>論文評論評語：</h4>
    <textarea name="sComment" value="" rows="50" cols="100"></textarea>
    </br></br>
    <input type="submit" value="提交">
    </br></br>
    <a href="index.php">返回登入頁面</a>
</body>
</html>
<?php
$_SESSION["viewcheck"]="yes";
?>