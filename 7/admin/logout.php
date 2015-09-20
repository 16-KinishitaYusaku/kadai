<?php
require("header.php");

session_start();
session_destroy();
echo "ログアウトしました。<br />";
echo "<a href=login.php>ログインページへ</a>";

require("footer.php");
?>