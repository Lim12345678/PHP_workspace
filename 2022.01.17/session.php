<?php

session_start();

$fruits="사과";
$_SESSION['fruits'] = "오렌지";
$_SESSION['drink'][0] = "콜라";
$_SESSION['drink'][1] = "사이다";

echo "세션 생성 완료<br>";

echo "<a href = 'session_result.php'>세션 확인하기</a><br>";
echo "<a href = 'session_del.php'>세션 삭제</a><br>";
?>