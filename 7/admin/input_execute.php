<?php
require("header.php");
require("sql_setup.php");

$title = $_POST["news_title"];
$detail = $_POST["news_detail"];
$author = $_POST["author"];

$sql = "INSERT INTO news(news_title, news_detail, show_flg, author, create_date, update_date) VALUES (:title,:detail,1,:author,sysdate(),sysdate())";

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':title',$title,PDO::PARAM_STR);
$stmt->bindValue(':detail',$detail,PDO::PARAM_STR);
$stmt->bindValue(':author',$author,PDO::PARAM_STR);

$result = $stmt->execute();

if($result){
    echo "記事の投稿に成功しました<br />";
    echo "<a href=news_list.php>ニュース一覧へいく</a><br />";
    echo "<a href=index.php>トップページに戻る</a><br />";
}

require("footer.php");
?>