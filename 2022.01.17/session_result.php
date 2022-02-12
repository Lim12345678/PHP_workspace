<?php
session_start();

print_r($_SESSION);
echo "<br><br>";
//echo "일반 변수 데이터는 ".$fruits." 이다. <br>";
echo "세션 데이터는 ". $_SESSION['drink'][1]." 이다.";

?>