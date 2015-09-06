<!--show_enp.php(アンケート表示ページ)-->
<?php
$notCheckNum = 4; //checkboxじゃないアンケート項目数
$titleArray = ["NAME","Email"];
$fp = fopen("data/answer.csv","r");
//$result = array();
//$resultHobby = array();

flock($fp, LOCK_SH);

while ($array = fgetcsv($fp)) {
    $num = count($array);
    for($i=0;$i<$num;$i++){
        echo $array[$i];
    }
    
//    var_dump($array);
//    $num1 = count($array[0]);
//    $num2 = count($array[1]);
//    
//    for($i=0;$i<$num1;$i++){
//        $result[$i] = $array[0][$i];
//    }
//    for($i=0;$i<$num2;$i++){
//        $resultHobby[$i] = $array[1][$i];
//    }
}

flock($fp, LOCK_UN);
fclose($fp);
?>


<!--
<table border=1>
 <tr><th>id</th><th>NAME</th><th>Email</th><th>Age</th><th>Sex</th><th>Hobby</th></tr>
 <tr><td>1</td><td><?php echo $result[0]; ?></td><td><?php echo $result[1]; ?></td><td><?php echo $result[2]; ?></td><td><?php echo $result[3]; ?></td><td><?php echo $resultHobby[0]; ?></td><td><?php echo $resultHobby[1]; ?></td></tr>
</table>
-->
