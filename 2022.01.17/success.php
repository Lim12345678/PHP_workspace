<?php

session_start();

if($_SESSION['login'] != "ok") {
    echo "<script>alert('로그인 해주세요!')</script>";
    echo "<<script>document.location.href='login.php';</script>";
}
?>

<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>로그인 성공 페이지</title>
</head>
<body>
<h2>로그인 성공!</h2>
<?php
$id = $_GET['userid'];
echo $id."님이 로그인하였씁니다.";
?>
<br><br>
<a href="logout.php">로그아웃</a>
</body>
</html>
