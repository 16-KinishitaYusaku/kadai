<!--タグ詳細ページ ※未完成※　-->
<?php
require_once("header.php");
require("sql_setup.php");

$tag_id = $_GET["tag_id"];
echo $tag_id;

    $news_id;
    $news_title;
    $news_detail;
    $news_created;
    $news_reference;
    $news_clip_num;

    $sql_tag = "SELECT id,LEFT(title,40),LEFT(detail,150),reference,clip_num FROM news WHERE ANd show_flg=1";
    $stmt_news = $pdo->prepare($sql_tag);
    $stmt_news->execute();
    $result_news = $stmt_news->fetchAll(PDO::FETCH_ASSOC);

    foreach($result_news as $row){
        $news_id[] = $row["id"];
        $news_title[] = $row["LEFT(title,40)"];
        $news_detail[] = $row["LEFT(detail,150)"];
        //$news_created[] = $row["created"];
        $news_refrence[] = $row["reference"];
        $news_clip_num[] = $row["clip_num"];
    }

?>

<div id="main_contents">
    
    <?php
//
//        for($i=0;$i<count($news_id);$i++){
//            echo '<div class="article">
//                    <div class="clip_zone">
//                        <div class="clip_name">ストック</div>
//                        <div class="clip_num">'.$news_clip_num[$i].'</div>
//                    </div>
//                    <div class="article_contents">
//                        <div class="article_title">
//                            <a href="'.$news_refrence[$i].'" target="blank">'.$news_title[$i].'</a>
//                        </div>
//                        <div class="article_detail">
//                            '.$news_detail[$i].'...
//                        </div>
//                        <div class="article_tags">';
//                            for($j=0; $j<count($tags_name[$i]);$j++){
//                                echo '<span class="article_tag"><a href="tag.php?tag_id='.$tags[$i][$j].'">'.$tags_name[$i][$j].'</a></span>';
//                            }
//                 echo '</div>
//                    </div>
//                </div>';
//        }
    ?>
 </div>

<?php
require_once("footer.php");
?>