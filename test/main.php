<?php
    $id = $_POST['id'];
    $pw = $_POST['pw'];

    if($id=="admin") {
        if($pw=="1234") {
            echo "<script>alert('로그인 성공!');</script>";
            echo "$id 님 환영합니다!";
        }
    } else {
        echo "로그인 실패!";
    }

?>

<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>메인페이지입니당~!~!</h2>

    <form action="login.php" method="post">
        <input type="submit" value="로그인 페이지 돌아가기">
    </form>
</body>
</html>
