<!Doctype html>
<html>
<head>
	<title>User registration</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="header">
		<h2>Register </h2>
	</div>
	<!--Display error messages here -->
	<form id = "myForm" action="myReg.php" method="post" entype = "multipart/form-data"> <!-- id-->
		<div class="input-group">
			<label>login</label>
			<input type="text" name="login">
		</div>
		<div class="input-group">
			<label>Role</label>
			<input type="text" name="role">
		</div>
		<div class="input-group">
			<label>First name</label>
			<input type="text" name="fname">
		</div>
		<div class="input-group">
			<label>Second name</label>
			<input type="text" name="lname">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="text" name="password_1">
		</div>
		<div class="input-group">
			<label>Submit</label>
			<button type="submit" name="submit" id = "sub" class="btn">Register</button> <!-- this id = "sub" might cause trobles-->
		</div>
		<p> <a href="admin.php?submit='1'" style="color: red;">Back to 'admin' page</a> </p>
	</form>
	
	<span id = "result"></span>
	
	<script src="script/jquery-1.8.1.min.js" type = "text/javascript"></script>
	<script src="script/main.js" type = "text/javascript"></script>
	
</body>
</html>