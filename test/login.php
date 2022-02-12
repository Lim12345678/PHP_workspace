<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style>
        .button {
            background-color: white;
            font-size: 20px;
            margin-left: 100px;
        }
        .button:hover {
            background-color: gray;
            color: red;
        }

    </style>

</head>
<body>
    <h2>로그인 페이지!</h2>

    <form action="main.php" method = "post">
        아 이 디 : <input type="text" name = "id"> <br><br>
        비밀번호 : <input type="password" name = "pw"> <br><br>
        <input type="submit" value="로그인" class="button">

    </form>
</body>
</html>