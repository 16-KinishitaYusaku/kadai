<?php
require("header.php");
require("sql_setup.php");

$news = array();

$sql = "SELECT * FROM news";

$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
//foreach($result as $row){
//    
//}
?>
<table border="1">
    <caption>ニュース記事一覧</caption>
    <tr><th>id</th><th>タイトル</th><th>本文</th><th>表示フラグ</th><th>ライター</th><th>執筆日</th><th>最終更新日</th><th></th></tr>
    <?php 
        for($i=0;$i<count($result);$i++){
            echo "<tr>";
            echo "<td>".$result[$i]["news_id"]."</td>";
            echo "<td>".$result[$i]["news_title"]."</td>";
            echo "<td>".$result[$i]["news_detail"]."</td>";
            echo "<td>".$result[$i]["show_flg"]."</td>";
            echo "<td>".$result[$i]["author"]."</td>";
            echo "<td>".$result[$i]["create_date"]."</td>";
            echo "<td>".$result[$i]["update_date"]."</td>";
            echo '<td><a href="update.php?id='.$result[$i]["news_id"].'"><button>編集</button></a></td>';
            echo "</tr>";
        }
    ?>
</table>

<?php require("footer.php"); ?>

