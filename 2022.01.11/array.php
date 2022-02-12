<?php
/*배열과 for문을 이용하여 순서대로 출력
    $teamA = ["a", "b", "c"];
    for($i=0;$i<count($teamA); $i++) {
        echo $teamA[$i]."씨<br>";
    }
*/

$teamA = ["김","이","박"];
$teamB = ["안","임"];

function teamList($name, $list) {
    echo "{$name}";
    echo "<ol>";
    for($i=0;$i<count($list); $i++) {
        echo "<li>".$list[$i]."</li>";
    }
    echo "</ol> ";
}
?>

<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>팀별 이름 목록</title>
</head>
<body>
<?php
teamList('A팀', $teamA);
teamList('B팀', $teamB);
?>
</body>
</html>
