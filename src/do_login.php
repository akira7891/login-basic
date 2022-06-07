<?php
//フォームに入力された内容を取得する
$user=$_POST['user'];
$pass=$_POST['pass'];

//ユーザー名とパスワードを確認する
if( strcmp($user,'akira')===0 && strcmp($pass,12345)===0)
{
    setcookie("user",$user);
    setcookie("pass",$pass);
    header('Location: item_list.php');
}
else
{
    setcookie("user","");
    setcookie("pass","");
    header('Location: login_failed.php');
}

/*
strcmp関数は、2つの文字列の大小を比較してくれる関数
strcmp(文字列1, 文字列2)
文字列1と文字列2が同じ場合、0を返します。
文字列1が文字列2よりも大きければ、プラスの数値を返します。
文字列1が文字列2よりも小さければ、マイナスの数値を返します。


header関数は、HTTPヘッダー情報を送信するときに使用します。
第一引数にはヘッダ文字列を指定
"Location:"ヘッダとURLを指定すると、指定したURLのブラウザを表示
*/
?>
