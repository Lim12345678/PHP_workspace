<?php
require_once ("Address.php");
$address = new Address();

$no = $_POST['no'];
$name = $_POST['name'];
$age = $_POST['age'];
$tel = $_POST['tel'];
$area = $_POST['area'];
$birth = $_POST['birth'];

$address->upAddress($name, $age, $tel, $area, $birth, $no);
echo "<script>alert('정보 수정 완료!')</script>";
echo "<script>document.location.href='address_view.php'</script>";

?>
