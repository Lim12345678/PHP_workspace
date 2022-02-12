<?php
session_start();

unset($_SESSION);
session_destroy();

echo "<script>alert('로그아웃 완료')</script>";
echo "<script>document.location.href='login.php';</script>";

?>