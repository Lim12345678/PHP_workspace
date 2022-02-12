<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GuGu_Dan</title>
</head>
<body>
<?php
//    echo "<h2>구구단을 외자!</h2>";
//    for($x=2;$x<=9;$x++) {
//        echo $x."단 <br>";
//        for($y=1;$y<=9;$y++) {
//            echo $x."*".$y."=".$x*$y."<br>";
//        }
//    }
?>

    <table border="1">
        <?php
            echo "<h2>PHP를 이용하여 테이블에 1~100 숫자 나타내기</h2>";
            for($x=0;$x<=9;$x++) {
                echo "<tr>";
                for($y=$x*10;$y<=$x*10+10;$y++) {
                    echo "<td> $y </td>";
                }
                echo "</tr>";
            }
        ?>

    </table>
</body>
</html>