<?php include'header.php'; ?>
<?php
$sql = 'SELECT news_id,LEFT(create_date,10),LEFT(news_title,25) FROM news WHERE show_flg="1"'; //show_flg=0は非表示

$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<section class="news contents-box">
        <h2 class="section-title text-center">
            <span class="section-title__yellow">News 一覧</span>
            <article class="news-detail">
                <dl class="clearfix">
            <?php
foreach($result as $row){
    echo '<dt class="news-date">'.$row["LEFT(create_date,10)"].'</dt>';
    echo '<dd class="news-description"><a href="news.php?news_id='.$row["news_id"].'" style="color:blue">'.$row["LEFT(news_title,25)"].'…</a></dd>';
}
$pdo = null;
?>
                </dl>
            </article>
    </h2>
</section>
<?php include'footer.php'; ?>