<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <?php
        $pdo = new PDO(
        'mysql:host=localhost;
        dbname=cs_academy; 
        charset=utf8',
        'root',
        ''); //password
    ?>
</head>
<body>
    <header class="header">
        <div class="inner clearfix">
            <h1 class="site-title"><a href="#"><img src="img/logo.png" alt="Cheese Academy Tokyo"></a></h1>
            <ul class="list-header text-right">
                <li>CHEESE DEVELOPMENT</li>
                <li>GROWTH CHEESE</li>
                <li>CHEESE PERSPECTIVE</li>
                <li>CHEESE GENERATOR</li>
            </ul>
        </div>
    </header>