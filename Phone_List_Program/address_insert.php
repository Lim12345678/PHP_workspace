<?php
require_once ("Address.php");
$address = new Address();

$name = $_POST['name'];
$age = $_POST['age'];
$tel = $_POST['tel'];
$area = $_POST['area'];
$birth = $_POST['birth'];


if($name == "" || $age == "" || $tel == "") {
    echo "<script>alert('데이터에 누락된 값이 있습니다. 데이터를 모두 입력해주세요!')</script>";
    echo "<script>document.location.href='address_view.php'</script>";
} else {
    $address->setAddress($name, $age, $tel, $area, $birth);
    echo "<script>alert('데이터가 추가되었습니다.')</script>";
    echo "<script>document.location.href='address_view.php'</script>";
}

?>