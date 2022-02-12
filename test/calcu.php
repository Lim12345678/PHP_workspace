<?php
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $option = $_GET['option'];

    echo "<h2>계산 결과!!!</h2>";
    if($option=="+") {
        $result = $num1 + $num2;
        echo "$num1 + $num2 = $result";
    } else if($option=="-") {
        $result = $num1 - $num2;
        echo "$num1 - $num2 = $result";
    } else if($option=="*") {
        $result = $num1 * $num2;
        echo "$num1 * $num2 = $result";
    } else if($option=="/") {
        $result = $num1 / $num2;
        echo "$num1 / $num2 = $result";
    } else {
        echo "오류가 발생하였습니다!!!";
    }

?>

<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>계산 결과</title>
</head>
<body>
    <form action="calcu.html">
        <br><br>
        <input type="submit" value="계산기로 돌아가기">
    </form>
</body>
</html>
