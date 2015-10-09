<?php
require_once("header.php");
require("sql_setup.php");

    //newsテーブルからデータ取ってくる
    $news_id;
    $news_title;
    $news_detail;
    $news_created;
    $news_reference;
    $news_clip_num;

//    $sql_news = "SELECT id,LEFT(title,40),LEFT(detail,150),reference,clip_num FROM news WHERE show_flg=1";
    $sql_news = "SELECT id,LEFT(title,40),LEFT(detail,150),reference,clip_num FROM news WHERE show_flg=1 ORDER BY clip_num DESC";
    $stmt_news = $pdo->prepare($sql_news);
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


//news_tagsテーブルからnewsに関連づけられたtag_idsを拾って$tagsに配列として入れる
//上記の$news_idを使って取得するので、show_flg=0のものは既に除外されている
$tags;

for($i=0;$i< count($news_id); $i++){
    $sql_news_tags = "SELECT news_id,tag_ids FROM news_tags WHERE news_id =".$news_id[$i];
    $stmt_news_tags = $pdo->prepare($sql_news_tags);
    $stmt_news_tags->execute();
    $result_news_tags = $stmt_news_tags->fetchAll(PDO::FETCH_ASSOC);
    
    foreach($result_news_tags as $row) {
        $tags[$i] = explode(',',$row["tag_ids"]);
    }
}

//上記tag_id(番号)からtag名を取ってきて$tag_nameに配列として入れる

$tags_name; //$tagsの番号を名前に置き換える

for($i=0; $i<count($tags);$i++){
    for($j=0;$j<count($tags[$i]);$j++){
        $sql_tags_name = "SELECT tag_name FROM tags WHERE id=".$tags[$i][$j];
        $stmt_tags_name = $pdo->prepare($sql_tags_name);
        $stmt_tags_name->execute();
        $result_tags_name = $stmt_tags_name->fetchAll(PDO::FETCH_ASSOC);
        
        $tags_name[$i][$j]=$result_tags_name[0]["tag_name"];
    }
}

$pdo=null;
?>


<div id="main_contents">
    
    <?php

        for($i=0;$i<count($news_id);$i++){
            echo '<div class="article">
                    <div class="clip_zone">
                        <div class="clip_name">ストック</div>
                        <div class="clip_num">'.$news_clip_num[$i].'</div>
                    </div>
                    <div class="article_contents">
                        <div class="article_title">
                            <a href="'.$news_refrence[$i].'" target="blank">'.$news_title[$i].'</a>
                        </div>
                        <div class="article_detail">
                            '.$news_detail[$i].'...
                        </div>
                        <div class="article_tags">';
                            for($j=0; $j<count($tags_name[$i]);$j++){
                                echo '<span class="article_tag"><a href="tag.php?tag_id='.$tags[$i][$j].'">'.$tags_name[$i][$j].'</a></span>';
                            }
                 echo '</div>
                    </div>
                </div>';
        }
    ?>
    
<!-- 以下の１セットがphpのfor文で吐き出されている
    <div class="article">
        <div class="clip_zone">
            <div class="clip_name">クリップ</div>
            <div class="clip_num">1</div>
        </div>
        <div class="article_contents">
            <div class="article_title">
                <a href="detail.php">タイトルタイトルタイトルタイトルタイトル</a>
            </div>
            <div class="article_detail">
                内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容
            </div>
            <div class="article_tags">
                <span class="article_tag"><a href="#">PHP</a></span>
                <span class="article_tag">JavaScript</span>
                <span class="article_tag">MySQL</span>
            </div>
        </div>
    </div>
-->
</div>

<?php
require_once("footer.php");
?>