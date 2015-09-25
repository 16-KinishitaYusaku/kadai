<!--左側にtag一覧を出す-->
<?php
    $tag_id;
    $tag_name;

    require_once("sql_setup.php");
    
    $sql = "SELECT * FROM tags";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach($result as $row){
        $tag_id[] = $row["id"];
        $tag_name[] = $row["tag_name"];
    }

    $pdo=null;

?>
<div id="tags">
    <?php 
for($i=0;$i<count($tag_name);$i++){
    echo '<div class="tag"><a href="tag.php?tag_id='.$tag_id[$i].'">'.$tag_name[$i].'</a></div>';
}
    ?>
<!--
    <div class="tag"><?php echo $tag_name[0] ?></div>
    <div class="tag"><?php echo $tag_name[1] ?></div>
-->
</div>