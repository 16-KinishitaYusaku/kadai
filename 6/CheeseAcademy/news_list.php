<?php include'header.php'; ?>
<?php
$sql = 'SELECT LEFT(create_date,10),news_title,news_detail FROM news WHERE news_id="'.$_GET['news_id'].'"';
$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?php include'footer.php'; ?>