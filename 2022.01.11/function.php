<?php

/*mt_rand()함수를 이용하여 랜덤 숫자 만들기
for($i=1; $i<=5; $i++) {
    $num = mt_rand(1,100);
    echo "{$num}, ";
}
*/

//echo "<br><br>";
/*사용자 정의 함수 만들기
function double($n) {
    $result = $n * 2;
    return $result;
}
$ret = double(5);
echo $ret;
*/

//요금 계산하는 price() 정의하기

$coo_price = $_GET['coo_price'];
$coo_num = $_GET['coo_num'];
function price( $num1, $num2) {
    $total = $num1 * $num2;
    return $total;
}
$cookie = price($coo_price,$coo_num);
?>

<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>쿠키 계산하기</title>
</head>
<body>
<form action="" method="get">
    쿠키 가격 : <input type="text" name = "coo_price"> <br><br>
    쿠키 수량 : <input type="text" name = "coo_num">
    <input type="submit" value="계산하기">
</form>

<br><hr>
<?php
    echo "쿠키 금액 : $coo_price , 쿠키 수량 : $coo_num <br> 총 금액은 {$cookie}원입니다."
?>


</body>
</html>
