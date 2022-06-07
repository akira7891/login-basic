<?php
//キャッシュを無効にする
header('Cache-Control:no-cache');

//cookieの内容を取得する
$user=$_COOKIE['user'];
$pass=$_COOKIE['pass'];

//ユーザー名とパスワードを確認する
if( strcmp($user,'akira')!==0 && strcmp($pass,12345)!==0)
{
    setcookie("user","");
    setcookie("pass","");
    header('Location: login_failed.php');
    exit();
};
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
    <h1>ログインに成功しました</h1>
    <?php var_dump($_COOKIE)?>
    
</body>
</html>
