<?php

$servername = "localhost";
$username = "root";
$password = "0000";
$dbname = "class";

$link = mysqli_connect($servername, $username, $password, $dbname);


if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}


$name = $_POST['sName'];
$stuId = $_POST['sStuId'];
$grade = $_POST['sGrade'];
$gender = $_POST['sGender'];
$drinkPrefer = implode(", ", $_POST['sBaverage']); 
$color = $_POST['sColor'];
$comment = $_POST['sComment'];


$sql = "INSERT INTO party (Name, Id, Grade, Gender, DrinkPrefer, Color, Comment) 
        VALUES ('$name', '$stuId', '$grade', '$gender', '$drinkPrefer', '$color', '$comment')";

if (mysqli_query($link, $sql)) {
    echo "報名成功！"."<br/>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($link);
}

echo "<a href = 'login.php'>重新填寫表單</a>";

mysqli_close($link);
?>
