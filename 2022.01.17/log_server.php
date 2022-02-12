<?php
session_start();

$id = $_POST['id'];
$pw = $_POST['pw'];

$result = "";
if($id == "admin" && $pw == "1234") {
    $result = 1;
    $_SESSION['login'] = "ok";
} else {
    $result = 0;
}

if($result == 1) {

    //echo "<script>document.location.href='success.php';</script>";
    header('Location: success.php?userid='.$id);
    //echo "<script>alert('로그인성공!')</script>";

    //echo "<script>document.location.href='success.php?userid='.$id;</script>";
} else {
    echo "<script>alert('로그인 실패ㅜㅜ')</script>";
    echo "<script>document.location.href='login.php';</script>";
}

?>