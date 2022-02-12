<?php
require_once("Address.php");
$address = new Address();

$no = $_GET['no'];
$name = $_GET['name'];

$address->delAddress($no);
echo "<script>alert('$name 님의 정보가 삭제되었습니다!')</script>";
echo "<script>document.location.href='address_view.php'</script>";
