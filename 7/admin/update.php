<?php
require("header.php"); 
require("sql_setup.php");

$id = $_GET["id"];
$title;
$detail;
$show_flg;
$author;
$create;
$update;

$sql = "SELECT * FROM news WHERE news_id = " . $id;
$stmt = $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach($results as $row){
    $title = $row["news_title"];
    $detail = $row["news_detail"];
    $show_flg = $row["show_flg"];
    $author = $row["author"];
    $create = $row["create_date"];
    $update = $row["update_date"];
}
?>
<form action="update_execute.php" method="post">
    <input type="hidden" name="id" value="<?php echo $id ?>" >
    id：<?php echo $id ?><br>
    タイトル：<input type="text" name="title" value="<?php echo $title ?>" ><br>
    本文：<textarea name="detail" ><?php echo $detail ?></textarea><br>
    表示フラグ：<input type="checkbox" name="show_flg" <?php if($show_flg == 1) echo 'checked=""'; ?> value="1"><br>
    ライター；<input type="text" name="author" value="<?php echo $author ?>" ><br>
    執筆日：<input type="text" name="create" value="<?php echo $create ?>" ><br>
    最終更新日：<input type="text" name="update" value="<?php echo $update ?>" ><br>
    <input type="submit" value="更新">
</form>
<?php require("footer.php"); ?>