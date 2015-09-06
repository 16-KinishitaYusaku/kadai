<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>アンケート入力フォーム</title>
    <!-- jQuery読み込み-->
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <style>
        body {
            text-align: center;
        }
        
        #form {
            width:400px;
            height:100%;
            margin: 0 auto;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>アンケートを入力してください</h1>
    <!--input_enq.php(アンケート入力ページ)-->
    <div id="form">
        <form action="input_finish.php" method="post">
            NAME: <input type="text" name="name"/><br />
            Email: <input type="text" name="email" /><br />
            Age: <input type="text" name="age" /><br />
            Sex: 
            <label><input type="radio" name="sex" value="male"/>Male</label>
            <label><input type="radio" name="sex" value="female"/>Female</label>
            <br />
            Hobby: 
            <label><input type="checkbox" name="hobby[]" value="sports"/>Sports</label>
            <label><input type="checkbox" name="hobby[]" value="reading"/>Reading</label>
            <label><input type="checkbox" name="hobby[]" value="music"/>Music</label>
            <label><input type="checkbox" name="hobby[]" value="travel"/>Travel</label><br /><br />
            <input type="submit" />
        </form>
    </div>
</body>
</html>