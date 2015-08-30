<!--input_enq.php(アンケート入力ページ)-->
<form action="comfirm_enq.php" method="post">
	NAME: <input type="text" name="name" /><br />
    Email: <input type="text" name="email" /><br />
	Age: <input type="text" name="age" /><br />
    Sex:<br />
    <label><input type="radio" name="sex" value="male"/>Male</label>
    <label><input type="radio" name="sex" value="female"/>Female</label>
    <br />
    Hobby: <br />
    <label><input type="checkbox" name="hobby" value="sports"/>Sports</label>
    <label><input type="checkbox" name="hobby" value="reading"/>Reading</label>
    <label><input type="checkbox" name="hobby" value="music"/>Music</label>
    <label><input type="checkbox" name="hobby" value="travel"/>Travel</label><br />
	<input type="submit" />
</form>
