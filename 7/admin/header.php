<?php
session_start();

if(!isset($_SESSION["statement"])) {
    $_SESSION["statement"] = 0; //0は非ログイン,1はログイン状態
}

if($_SESSION["statement"] == 0){
    //echo "ログインできてません";
    header("Location:login.php");
} else if($_SESSION["statement"] == 1){
    echo "ログイン中…<br />";
}else{
    echo "error";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>newsAdmin</title>
<!--    <link rel="stylesheet" href="index.css">-->
    <!-- jQuery読み込み-->
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
</head>
<body>
    <a href="index.php">TOPページへ戻る</a>