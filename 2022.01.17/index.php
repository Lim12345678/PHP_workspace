<?php
$page = $_GET['page'];

require_once ('header.php');

if($page == "content1") {
    require_once ('content1.php');
} else if($page == "content2") {
    require_once ('content2.php');
}
require_once ('tail.php');




?>