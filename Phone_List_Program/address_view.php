<?php
require_once("page.php");
require_once ("Address.php");
$address = new Address();
$list = $address->getListPage($limitStart, $onePage, $searchSql);
$count = 0;
?>

<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>주소록 프로그램</title>
    <style>
        * {
            padding: 0;
            margin: 0 auto;
            text-align: center;
        }
        h1 {
            padding-bottom: 20px;
        }
        th, td {
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
        ul {
            margin-top: 30px;
        }
        li {
            display: inline;
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>
<body>
    <h1>주소록 프로그램</h1>
    <hr><br>
    <div>
        <form action="address_insert.php" method="post">
            <label for="name"> 이름 : <input type="text" name = "name" size="5"></label>
            <label for="age"> 나이 : <input type="text" name = "age" size="5"></label>
            <label for="tel">연락처 : <input type="text" name = "tel" size="10"></label>
            <label for="area"> 거주지 :
                <select name="area">
                    <option value="광주">광주</option>
                    <option value="서울">서울</option>
                    <option value="여수">여수</option>
                    <option value="인천">인천</option>
                </select>
            </label>
            <label for="birth">생년월일 : <input type="date" name = "birth"></label>

            <button type="submit">추가</button><br><br>
        </form>
    </div>

    <div>
        <form action="" method = get>
            <label for="searchKey">
                <select name="searchKey">
                    <option value="">전체</option>
                    <option value="name">이름</option>
                </select>
            </label>
            <label for="searchWord"><input type="text" name = "searchWord" autofocus></label>
            <input type="submit" value="검색"><br><br>
        </form>
    </div>
    <table border="1">
        <tr>
            <th>번호</th>
            <th>이름</th>
            <th>나이</th>
            <th>연락처</th>
            <th>거주지</th>
            <th>생년월일</th>
            <th>수정</th>
            <th>삭제</th>
        </tr>

        <?php
            foreach ($list as $value) {
                $count = $count + 1;
        ?>
        <tr>
<!--            no숫자 순서대로 나오게 하기-->
<!--            <td> --><?php //echo $count; ?><!-- </td>-->
            <td> <?php echo $value['no'] ?> </td>
            <td  hidden> <?php echo $value['no'] ?> </td>
            <td> <?php echo $value['name'] ?> </td>
            <td> <?php echo $value['age'] ?> </td>
            <td> <?php echo $value['tel'] ?> </td>
            <td> <?php echo $value['area'] ?> </td>
            <td> <?php echo $value['birth'] ?> </td>
            <td><a href="address_update_page.php?no=<?php echo $value['no'] ?>&name=<?php echo $value['name'] ?>&age=<?php echo $value['age'] ?>
            &tel=<?php echo $value['tel'] ?>&area=<?php echo $value['area'] ?>&birth=<?php echo $value['birth'] ?>">수정하기</a></td>
            <td><a href="address_delete.php?no=<?php echo $value['no']?>&name=<?php echo $value['name'] ?>">삭제하기</a></td>
        </tr>

        <?php  }  ?>
    </table>
<!--빨간 밑줄이 생기는데, 오류는 아니다.-->
    <?php echo $paging ?>
</body>
</html>
