<?php
require("header.php");

        $login_id = "cheese"; //ログインid
$login_password = "1234"; //パスワード

session_start();

$id = $_POST["id"];
$password = $_POST["password"];

if($id==$login_id and $password==$login_password){
    $_SESSION["statement"] = 1;
    echo "ログイン成功<br />";
    echo "<a href=index.php>トップページへ</a>";
}else{
    echo "ログインid、もしくはパスワードが間違っています<br />";
    echo "<a href=login.php>ログイン画面へ戻る</a>";
}
require("footer.php");
?>