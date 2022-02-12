<?php
require_once ('Address.php');
$address = new address();

$no = $_GET['no'];
$name = $_GET['name'];
$age = $_GET['age'];
$tel = $_GET['tel'];
$area = $_GET['area'];
$birth = $_GET['birth'];

$address->upAddress($name, $age, $tel, $area, $birth, $no);
echo "<script>alert('$name 님의 정보 수정이 완료되었습니다!')</script>";
echo "<script>document.location.href='address_view.php'</script>";


?>
