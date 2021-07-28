<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>main</title>
</head>
<body>
    <div class="nav">
        <a class="name">name</a>
        <div class="nav-right">
            <a href="./login.php" class="index-login-btn">로그인</a>
            <?php
            // if(isset($_SESSION['user'])){
            //     echo "<h2>님 환영합니다.</h2>";
            // else(isset($_SESSION['user']))){
            //     echo"<a href="./login.php">로그인</a>";
            // }
            ?>
        </div>
    </div>
    <div class="con">
        <div class="img"></div>
    </div>
</body>
</html>