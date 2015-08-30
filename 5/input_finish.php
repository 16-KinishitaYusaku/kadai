<!--input_finish.php(アンケート入力thanksページ)-->
<h1>Thank you!!</h1>

<?php
//ファイル入力
$answer = array();
$answer[0] = $_POST["name"];
$answer[1] = $_POST["email"];
$answer[2] = $_POST["age"];
$answer[3] = $_POST["sex"];

//hobbyは複数選択できるので別の行列に
$hobby = array();

//hobby入力
for ($i=0; $i< count($_POST["hobby"]); $i++){
    if($_POST["hobby"][$i]){
        $hobby[$i] = $_POST["hobby"][$i];
    }
}

//ファイルに書き込み
$fp = fopen("data/answer.csv","w");
flock($fp,LOCK_SH);

fputcsv($fp,$answer);
fputcsv($fp,$hobby);

flock($fp,LOCK_UN);
fclose($fp);

//アンケート内容表示
echo "NAME:".$answer[0]."<br />";
echo "Email:".$answer[1]."<br />";
echo "Age:".$answer[2]."<br />";
echo "Sex:".$answer[3]."<br />";
echo "Hobby:";
for($i=0;$i<count($hobby);$i++){
    echo $hobby[$i].",";
}
echo "<br />";
?>