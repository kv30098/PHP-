<?php include 'include.inc';?>
<meta charset="utf-8">

<?php
if(isset($_SESSION["check"])){
    if($_SESSION["check"]=="yes"){
        echo "歡迎進入chair網頁<br/>";
        echo "<a href='logout.php'>登出</a>";
    }
}
?>