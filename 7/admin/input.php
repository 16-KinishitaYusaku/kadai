<?php require("header.php"); ?>
<body>
    <h1>ニュース追加画面</h1>
    <form action="input_execute.php" method="post">
        <ul>
            <li><label>タイトル:<input type="text" name="news_title" value="" /></label></li>
            <li><label>本文:<textarea name="news_detail" value=""></textarea></label></li>
            <li><label>著者:<input type="text" name="author" value="" /></label></li>
            <li><label><input type="submit" /></label></li>
        </ul>
    </form>
</body>
<?php require("footer.php"); ?>
