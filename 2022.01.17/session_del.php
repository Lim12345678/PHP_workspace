<?php
session_start();

unset($_SESSION);

session_destroy();

echo "세션 삭제 완료 <br>";
echo "<a href = 'session_result.php'>삭제확인</a>";

?>