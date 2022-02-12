<?php
    echo "<script>alert('Hello');</script>";

?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        table {
            width : 60%;
            border : 1px solid black;
            border-collapse: collapse;
        }
        tr, td {
            border: 1px solid black;
        }

    </style>
</head>
<body>
<table>
    <tr>
        <td>이름</td>
        <td>휴대폰 번호</td>
        <td>주소</td>
        <td>이메일</td>
    </tr>
    <tr>
        <?php
        $name = "***";
        $phone = "###-####-####";
        $address = "*****************";
        $email = "#####@####.###";

        echo "<td>$name </td>";
        echo "<td>$phone</td>";
        echo "<td>$address</td>";
        echo "<td>$email</td>";
        ?>
    </tr>
</table>
</body>
</html>