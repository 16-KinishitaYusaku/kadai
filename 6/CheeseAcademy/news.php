<?php include'header.php'; ?>
<?php
$sql = 'SELECT LEFT(create_date,10),news_title,news_detail FROM news WHERE news_id="'.$_GET['news_id'].'"';
$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

    <section class="news contents-box">
        <h2 class="section-title text-center">
            <span class="section-title__yellow">News</span>
            <span class="section-title-ja text-center">
            更新日:<?php echo $result[0]["LEFT(create_date,10)"]; ?>
            </span>
        </h2>
        <article class="news-detail">
            <dl class="clearfix">
                <dd class="news-title"><h2><?php echo $result[0]["news_title"]; ?></h2></dd>
                <dd><?php echo $result[0]["news_detail"]; ?></dd>
            </dl>
            <p class="view-detail text-right"><a href="news_list.php">ニュース一覧を見る</a></p>
        </article>
    </section>

<?php include'footer.php'; ?>