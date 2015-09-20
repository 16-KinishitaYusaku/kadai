<?php
require("header.php");
require("sql_setup.php");

$id = $_POST["id"];
$title = $_POST["title"];
$detail = $_POST["detail"];
$show_flg;
if(isset($_POST["show_flg"])){
    $show_flg = 1;
}else{
    $show_flg = 0;
}
$author = $_POST["author"];
$create = $_POST["create"];
$update = $_POST["update"];

$sql = "UPDATE news SET news_title='".$title."', news_detail='".$detail."', show_flg=".$show_flg.", author='".$author."', update_date=sysdate() WHERE news_id=".$id;

$stmt= $pdo->prepare($sql);
$result = $stmt->execute();

if($result) {
	echo "データが更新できました";
	echo "<a href=news_list.php>一覧へ</a>";
} else {
	echo "データの登録に失敗しました";
}

require("footer.php");
?>

<!--
    create_date='".$create."',
    update_date='".$update."'-->
