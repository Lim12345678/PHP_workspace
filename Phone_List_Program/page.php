<?php
require_once ("Address.php");
$address = new Address();

// 페이지에 get 변수가 있다면 받아오고, 없다면 1페이지를 보여줌
if(isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}

$searchKey = isset($_GET['searchKey']) ? $_GET['searchKey'] : "";
$searchWord = isset($_GET['searchWord']) ? $_GET['searchWord'] : "";

$searchSql = ($searchKey != "") ?"where " .$searchKey ." LIKE '%". $searchWord . "%'" : "";




//echo "현재 페이지는 ". $page . "입니다. <br>";

// 전체 게시글 카운팅
//$row = $address->getCountList();
$row = $address->getCountList($searchSql);
$allPost = $row['count'];

// 한 페이지에 보여줄 게시글 수
$onePage = 5;

// 전체 페이지 수
// ceil 올림, floor 내림, round 반올림
$allPage = ceil($allPost / $onePage);

// 이전페이지, 다음페이지 예외처리
/*
if($page <= 1) {
    $page = 1;
}
if($page >= $allPage) {
    $page = $allPage;
}
*/

// 페이징 블록처리 시작 / 한 블록에 보여줄 페이지
$oneBlock = 5;  //최대 5개의 페이지 보여줌

// 블록의 첫 번째 페이지
if($page <= floor($oneBlock/2)) {
    $firstPage =  1;
} else {
    $firstPage =  $page - floor($oneBlock/2);
}
//$firstPage =  $page - floor($onePage/2);

// 블록의 마지막 페이지
if($page >= $allPage-floor($oneBlock/2)) {
    $lastPage = $allPage;
} else {
    $lastPage = $page + floor($oneBlock/2);
}
//$lastPage = $page + floor($onePage/2);

// 블록 예외처리
if($allPage > $oneBlock) {
    if($page <= floor($oneBlock/2)) {
        $lastPage = $oneBlock;
    }
    if($page >= $allPage-floor($oneBlock/2)) {
        $firstPage = $allPage - $oneBlock+1;
    }
}



// 페이지를 저장할 변수 추가할 땐 마침표(.)를 이용해서 쭉 이어붙인다.
$paging = "<ul>";

//처음페이지로 이동
$paging .= "<li><a href='address_view.php?page=1'>※처음※</a></li>";


// 이전페이지로 이동
if($page <=1) {
    $paging .="<li><a href='address_view.php?page=1'>◀이전</a></li>";
} else {
    $paging .="<li><a href='address_view.php?page=".($page-1)."'>◀이전</a></li>";
}
//$paging .="<li><a href='address_view.php?page=".($page-1)."'>◀이전</a></li>";


for($i = $firstPage; $i <= $lastPage; $i++) {
    if($page==$i) {
        $paging .= "<li style='background-color: gray'><a href='address_view.php?page=" . $i . "&searchKey = ". $searchKey ."&searchWord =" . $searchWord . "' >$i</a></li>";
    } else {
//        $paging .= "<li><a href='address_view.php?page=" . $i . "' >$i</a></li>";
        $paging .= "<li><a href='address_view.php?page=" . $i . "&searchKey = ". $searchKey ."&searchWord =" . $searchWord . "' >$i</a></li>";
    }

}

// 다음 페이지로 이동
if($page >= $allPage) {
    $paging .="<li><a href='address_view.php?page=$allPage'>다음▶</a></li>";
} else {
    $paging .="<li><a href='address_view.php?page=".($page+1)."'>다음▶</a></li>";
}
//$paging .="<li><a href='address_view.php?page=".($page+1)."'>다음▶</a></li>";

// 끝 페이지로 이동
$paging .= "<li><a href='address_view.php?page=$allPage'>※끝※</a></li>";

$paging .= "</ul>";

// LIMIT 셋팅
$limitStart = ($onePage * $page) - $onePage;

?>

