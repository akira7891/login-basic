<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログインシステム</title>
</head>
<body>
    <h1>ログインに失敗しました</h1>
    <a href="login.html">もう一度ログインしてみる</a>
    <?php var_dump($_SESSION)?>
    
</body>
</html>
