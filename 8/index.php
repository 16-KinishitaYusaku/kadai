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

    $sql_news = "SELECT id,LEFT(title,40),LEFT(detail,150),clip_num FROM news WHERE show_flg=1";
    $stmt_news = $pdo->prepare($sql_news);
    $stmt_news->execute();
    $result_news = $stmt_news->fetchAll(PDO::FETCH_ASSOC);

    foreach($result_news as $row){
        $news_id[] = $row["id"];
        $news_title[] = $row["LEFT(title,40)"];
        $news_detail[] = $row["LEFT(detail,150)"];
        //$news_created[] = $row["created"];
        //$news_refrence[] = $row["reference"];
        $news_clip_num[] = $row["clip_num"];
    }

//var_dump($news_title);

//news_tagsテーブルからnewsに関連づけられたtagを拾ってくる
$tags;
$sql_news_tags = "";

//
$tag;
$sql_tags="";

$pdo=null;
?>


<div id="main_contents">
    
    <?php
for($i=0;$i<count($news_id);$i++){
    echo '<div class="article">
            <div class="clip_zone">
                <div class="clip_name">クリップ</div>
                <div class="clip_num">'.$news_clip_num[$i].'</div>
            </div>
            <div class="article_contents">
                <div class="article_title">
                    <a href="detail.php?='.$news_id[$i].'">'.$news_title[$i].'</a>
                </div>
                <div class="article_detail">
                    '.$news_detail[$i].'...
                </div>
                <div class="article_tags">
                    <span class="article_tag"><a href="#">PHP</a></span>
                    <span class="article_tag">JavaScript</span>
                    <span class="article_tag">MySQL</span>
                </div>
            </div>
        </div>';
}



    ?>
    
    
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
    
<!--
    <div class="article">
        <div class="clip_zone">
            <div class="clip_name">クリップ</div>
            <div class="clip_num">2</div>
        </div>
        <div class="article_contents">
            <div class="article_title">
                <a href="detail.php">タイトル2タイトル2タイトル2タイトル2タイトル2</a>
            </div>
            <div class="article_detail">
                内容2内容2内容2内容2内容2内容22内容2内容2内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内2容内容2内容内容内容2内容内容内容内容内容内容内容2
            </div>
            <div class="article_tags">
                <span class="article_tag">Java</span>
                <span class="article_tag">MySQL</span>
            </div>
        </div>
    </div>
-->
</div>

<?php
require_once("footer.php");
?>