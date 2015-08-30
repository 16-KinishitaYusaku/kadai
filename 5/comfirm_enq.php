<!--confirm_enq.php(アンケート入力確認ページ)-->
<?php
echo "NAME:".$_POST["name"]."<br />";
echo "Email:".$_POST["email"]."<br />";
echo "Age:".$_POST["age"]."<br />";
echo "Sex:".$_POST["sex"]."<br />";
echo "Hobby:".$_POST["hobby"]."<br />";
?>
<!--<form action="input_finish.php" method="post">-->
<a href="input_finish.php"><input type="submit" value="OK??"/></a>
<!--</form>-->
