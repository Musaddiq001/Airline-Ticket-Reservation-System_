<form action="../controller/server.php" method="post">
<h1>Your info to login</h1>
User type:
<label for="type">Choose a type</label>
  <select name="type" id="type">
    <option value="Admin">Admin</option>
	<option value="Airport Manager">Airport Manager</option>
    <option value="Customer">Customer</option>
    <option value="Airport Agent">Airport Agent</option>
  </select> <br> 
User Name :
<input value="" type="text" name="uname" /><br>
Password  : <input type="password" name="pass" /><br>
<br>
<input type="submit" name="sbt" value="Login" /><br>
</form>
<a href="regi.php">Signup</a><br/>
<a href="index.html">Home</a><br/><br/><br/>