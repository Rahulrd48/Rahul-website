<?php include("codebind.html")
?>
<body>
<div class="reg">
<form action="connection.php" method="post">
<label for="username">USERNAME</label><br />
<input type="text" name="n" size="50" placeholder = "enter your name" /><br /><br>
<label for="password">PASSWORD</label><br />
<input type="password" name="p" size="50" placeholder = "enter your password" /><br /><br>
<label for="email">EMAIL</label><br />
<input type="email" name="e" size="50" placeholder = "enter your mail"><br><br>
<label for="DOB">D.O.B</label><br />
<input type="date" name="d" size="50" placeholder = "enter your D.O.B" /><br /><br>
<label for="gender">GENDER</label><br>
<input type="radio" name="g" value="MALE">MALE<br>
<input type="radio" name="g" value="FEMALE">FEMALE<br><br>
<label for="city">DESIGNATION</label><br>
<select name="j">
<option value="Select">SELECT</option>
<option value="chef">CHEF</option>
<option value="Server">SERVER</option>
<option value="Manager">MANAGER</option>
</select><br><br>
<input type="button" value="SUBMIT">
</form>
</div>
</body>
<?php include("footer.html")
?>