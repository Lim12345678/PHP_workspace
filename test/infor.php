<?php
    echo "<h2>정보 확인 화면</h2>";
    $name = $_POST['name'];
    $option = $_POST['option'];
    $check = $_POST['check'];

    echo "이름 : $name <br><br> 직업 : $option <br><br> 관심분야 : ";

    for ($i=0; $i<count($check); $i++) {
        echo "$check[$i], ";

    }

    //echo "이름 : $name <br><br> 직업 : $option <br><br> 관심분야 : $check";


?>

<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>정보 확인</title>
    <style>
        .button {
            background-color: white;
            font-size: 20px;
            margin-left: 50px;
        }
        .button:hover {
            background-color: gray;
            color: red;
        }
    </style>

</head>
<body>
<form action="infor.html">
    <br><br>
    <input type="submit" value="돌아가기" class="button">
</form>
</body>
</html>
