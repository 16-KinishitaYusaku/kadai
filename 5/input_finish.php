<!--input_finish.php(アンケート入力thanksページ)-->
Thank you!!
<?php
//ファイル入力
$answer = array($_POST["name"],$_POST["Email"],$_POST["Age"],$_POST["Sex"],$_POST["Hobby"])
$fp = fopen("data/data.txt","r");
flock($fp, LOCK_SH);
while ($array = fgetcsv($array))

//アンケート内容表示
echo "NAME:".$_POST["name"]."<br />";
echo "Email:".$_POST["email"]."<br />";
echo "Age:".$_POST["age"]."<br />";
echo "Sex:".$_POST["sex"]."<br />";
echo "Hobby:".$_POST["hobby"]."<br />";
?>