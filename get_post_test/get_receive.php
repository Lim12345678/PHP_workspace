<?php
    $a = $_GET['fruits'];
    echo "<h2>당신이 입력한 과일은 $a 입니다.</h2>";

    echo "<br><br>";
    if($a=="사과") {
        echo "당신이 입력한 과일은 사과 입니다.";
    } else {
        echo "당신이 입력한 과일은 사과가 아닙니다.";
    }
?>

<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>get_receive</title>
</head>
<body>
    <form action="get_send.php" method="get">
        <br><br>
        <input type="submit" value="돌아가기">
    </form>
</body>
</html>
