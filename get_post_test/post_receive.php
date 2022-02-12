<?php
    $music = $_POST['music'];
    echo "당신이 좋아하는 노래 제목은 $music 입니다. <br><br>";

    if($music=="드라마") {
        echo "당신이 좋아하는 노래 제목은 드라마 입니다.";
    } else {
        echo "당신이 좋아하는 노래 제목은 드라마가 아닙니다.";
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
    <form action="post_send.php" method="post">
        <br><br>
        <input type="submit" value="돌아가기">
    </form>
</body>
</html>
