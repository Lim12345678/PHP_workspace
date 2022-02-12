<?php
require_once ('Address.php');
$address = new address();
$no = $_GET['no'];
$name = $_GET['name'];

?>

<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>정보 수정</title>
    <style>
        * {
            margin: 10px;
        }
    </style>
</head>
<body>
<h2>정보 수정 페이지입니다.</h2>
<h3><?php echo $name; ?>님의 정보 수정</h3>

<div>
    <form action="address_update.php" method="get">
        <label for="no">
            번호 : <input type="text" value= <?php echo $no; ?> name="no" size="5" readonly><br>
        </label>
        <label for="name">
            이름 : <input type="text" name="name" size="5"><br>
        </label>

        <label for="age">
            나이 : <input type="text" name="age" size="5"><br>
        </label>

        <label for="tel">
            연락처 : <input type="text" name="tel" size="10"><br>
        </label>

        <label for="area">
            거주지 :
            <select name="area" id="">
                <option value="광주">광주</option>
                <option value="서울">서울</option>
                <option value="여수">여수</option>
                <option value="인천">인천</option>
            </select>
        </label><br>

        <label for="birth">
            생년월일 : <input type="date" name="birth"><br>
        </label>

        <button type="submit">수정</button>
    </form>
</div>

</body>
</html>
