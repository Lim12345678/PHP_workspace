<?php
require_once ('Address.php');
$address = new Address();
$list = $address->getList();
$count = 0;
//print_r($list);
//foreach ($list as $abc) {
//    echo $abc['no'];
//}

?>

<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>주소록</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            margin: 0 auto;
            text-align: center;
        }
        h1 {
            padding-bottom: 20px;
        }
        th, td{
            padding: 0.2rem 1.1rem;
        }
        table th {
            background-color: lightgray;
        }
        a {
            text-decoration: none;
            font-weight: 600;
            color: blue;
        }
        a:hover {
            color: red;
        }
        label {
            /*display: flex;*/
            /*background-color: cornflowerblue;*/
        }
    </style>
</head>
<body>
    <h1>주소록 프로그램</h1>
    <div>
        <form action="address_insert.php" method="post">
            <label for="name">
                이름 : <input type="text" name="name" size="5">
            </label>

            <label for="age">
                나이 : <input type="text" name="age" size="5">
            </label>

            <label for="tel">
                연락처 : <input type="text" name="tel" size="10">
            </label>

            <label for="area">
                <select name="area" id="">
                    <option value="광주">광주</option>
                    <option value="서울">서울</option>
                    <option value="여수">여수</option>
                    <option value="인천">인천</option>
                </select>
            </label>

            <label for="birth">
                생년월일 : <input type="date" name="birth">
            </label>

            <button type="submit">추가</button>
<!--            <input type="submit" value="추가">-->
        </form>
    </div>



    <table border="1">
        <tr>
            <th name = "no2">번호</th>
            <th>이름</th>
            <th>나이</th>
            <th>연락처</th>
            <th>거주지</th>
            <th>생년월일</th>
            <th>수정</th>
            <th>삭제</th>
        </tr>

        <?php
            foreach($list as $value) {
            $count = $count + 1;
        ?>

        <tr>
            <td>  <?php echo $value['no']; ?> </td>
            <td>  <?php echo $value['name']; ?> </td>
            <td>  <?php echo $value['age']; ?> </td>
            <td>  <?php echo $value['tel']; ?> </td>
            <td>  <?php echo $value['area']; ?> </td>
            <td>  <?php echo $value['birth']; ?> </td>


            <td><a href="address_update_view.php?no=<?php echo $value['no']; ?>&name=<?php echo $value['name']; ?>">수정하기</a></td>
            <td><a href="address_delete.php?no=<?php echo $value['no']; ?>&name=<?php echo $value['name']; ?>">삭제하기</a></td>
        </tr>

        <?php
        }
        ?>
    </table>


</body>
</html>