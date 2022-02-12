<?php
//데이터베이스에 추가
require_once("Address.php");
$address = new Address();

$name = $_POST['name'];
$age = $_POST['age'];
$tel = $_POST['tel'];
$area = $_POST['area'];
$birth = $_POST['birth'];

//$list = $address->setAddress($name, $age, $tel, $area, $birth);
if($name == "" || $age == "" || $tel == "") {
    echo "<script>alert('데이터에 누락된 값이 있습니다. 데이터를 모두 입력해주세요!')</script>";
    echo "<script>document.location.href='address_view.php'</script>";
} else {
    $address->setAddress($name, $age, $tel, $area, $birth);
    echo "<script>alert('데이터 추가 성공!')</script>";
    echo "<script>document.location.href='address_view.php'</script>";

}

?>

<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>삽입 완료</title>
</head>
<body>

</body>
</html>
