<form action="../controller/regi_validate.php" method="post"><pre>
User type:
<label for="type">Choose a type</label>
  <select name="type" id="type">
    <option value="Admin">Admin</option>
	<option value="Airport Manager">Airport Manager</option>
    <option value="Customer">Customer</option>
    <option value="Airport Agent">Airport Agent</option>
  </select>
User Name:
<input type="text" name="uname"><br/>
Password:
<input type="password" name="pass"><br/>
Confirm Password:
<input type="password" name="confpass"><br/>
E Mail:
<input type="text" name="email"><br/>
<input type="submit" name="sbt" value="submit" />
</pre>
</form>
<a href="login.php">Login</a><br/>
<a href="index.html">Home</a><br/>