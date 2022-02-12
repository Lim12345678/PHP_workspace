<?php

class Staff {
    public $name;
    public $age;

    public function hello() {
        echo "안녕하세요!";
    }
}

?>

<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Staff class</title>
</head>
<body>

<pre>
    <?php
        $hana = new Staff();
        $hobi = new Staff();

        $hana -> name = "하나";
        $hana -> age = 21;
        $hobi -> name = "호비";
        $hobi -> age = 35;

        print_r($hana);
        print_r($hobi);

        $hana->hello();
        $hobi->hello();
    ?>

</pre>

</body>
</html>
