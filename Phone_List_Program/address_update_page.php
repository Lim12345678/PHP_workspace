<?php
require_once ("Address.php");

$no = $_GET['no'];
$name = $_GET['name'];
$age = $_GET['age'];
$tel = $_GET['tel'];
$area = $_GET['area'];
$birth = $_GET['birth'];

function Gsel($area) {
    if($area == "광주") echo "selected";
}
function Ssel($area) {
    if($area == "서울") echo "selected";
}
function Ysel($area) {
    if($area == "여수") echo "selected";
}
function Isel($area) {
    if($area == "인천") echo "selected";
}

?>

<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        a {
            text-decoration: none;
        }
    </style>
</head>
<body>
<h1>정보 수정 페이지</h1><hr>

<h2><?php echo $name ?>님의 정보 수정</h2>
<form action="address_update.php" method="post">
    <label for="no" hidden> 번호 : <input type="text" name = "no" value = "<?php echo $no ?>"></label>
    <label for="name"> 이름 : <input type="text" name = "name" size="5" value="<?php echo $name ?>"></label><br><br>
    <label for="age"> 나이 : <input type="text" name = "age" size="5" value="<?php echo $age ?>"></label><br><br>
    <label for="tel">연락처 : <input type="text" name = "tel" size="10" value="<?php echo $tel ?>"></label><br><br>
    <label for="area">거주지 :
        <select name="area">
            <option value="광주" <?php Gsel($area); ?>>광주</option>
            <option value="서울" <?php Ssel($area); ?>>서울</option>
            <option value="여수" <?php Ysel($area); ?>>여수</option>
            <option value="인천" <?php Isel($area); ?>>인천</option>
        </select><br><br>
    </label>
    <label for="birth">생년월일 : <input type="date" name = "birth" value="<?php echo $birth ?>"></label> <br><br>

    <button type="submit">수정하기</button>
    <button type="reset">다시 입력하기</button>
    <button><a href="address_view.php">돌아가기</a></button>
</form>

</body>
</html>
