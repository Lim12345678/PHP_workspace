<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>로그인페이지</title>
</head>
<body>
<form action="log_server.php" method="post">
    <h2>로그인 페이지</h2>

    <table>
        <tr>
            <td>아이디 : </td>
            <td><input type="text" name="id" value="admin"></td>
        </tr>
        <tr>
            <td>비밀번호 : </td>
            <td><input type="text" name="pw" value="1234"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="로그인"></td>
        </tr>
    </table>
    
    
</form>

</body>
</html>