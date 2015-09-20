<?php
//require_once("sql_setup.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>EngineeringNews</title>
    <link rel="stylesheet" href="index.css">
    <!-- jQuery読み込み-->
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
</head>
<body>
    
<!--  ヘッダー  -->
    <div id="header">
        <div class="inner_body">
            <span id="title">teraClips</span>
            <span id="serch">
                <form>
                <input type="text" name="serch">
                <input type="button" value="検索">
                    <a href="login.php">ログイン(未実装)</a>
                </form>
            </span>
        </div>
    </div>
    
<!--  ここはパンくずリスト  -->
    <div id="sub_header">
        <div class="inner_body">
            <span id="">ここにパン屑リスト</span>
        </div>
    </div>
    
    
<!--  ここがメインコンテンツ  -->
    <div id="contents">
        <div id="main_innner_body" class="inner_body">
            <?php require("tags.php") ?>
