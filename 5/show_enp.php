<!--show_enp.php(アンケート表示ページ)-->
<?php
$fp = fopen("data/answer.csv","r");
flock($fp, LOCK_SH);
while ($array = fgetcsv($fp)) {
    $num = count($array);
    for($i=0;$i<$num;$i++){
        echo $array[$i].",";
    }
}
flock($fp, LOCK_UN);
fclose($fp);
?>