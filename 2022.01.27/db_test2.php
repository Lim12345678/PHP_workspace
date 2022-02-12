<?php

require_once ('DB.php');
$db = new DB();
//$db = $db->getDB();

echo "select문 테스트 <br>";
$list = $db->selectTest();
print_r($list);


/*
echo "<br> insert문 테스트 <br>";
$result = $db->insertTest("박커피",20,"010-2553-5996","평양","1999-07-15");
if($result) {
    echo "insert 성공";
}

else {
    echo "insert 실패";
}
*/


/*
echo "<br> update문 테스트";
$result = $db->updateTest("김제비",2);
if($result) {
    echo "update 성공";
} else {
    echo "update 실패";
}
*/

/*
echo "<br> delete문 테스트";
$result = $db->deleteTest(3);
if($result) {
    echo "delete 성공!";
} else {
    echo "delete 실패ㅠㅠ";
}
*/




/*
//select 테스트
$stmt = $db->prepare("select * from address where name = ?");
$stmt->execute(array("오"));

//실행 결과 가져와서 result에 저장
$result = $stmt->fetchAll();
//fetchAll-> 실행결과 전부

print_r($result);
*/
?>

<!doctype html>
<html lang="ko">
</html>