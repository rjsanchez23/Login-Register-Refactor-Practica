<html>
	<head>
		<title>registration page - php salt and hash password - www.codeofaninja.com</title>
		<link type="text/css" rel="stylesheet" href="css/style.css" />
	</head>
<body>

<div id="loginForm">


	<form action="src/WebRegisterController.php" method="post">
	
		<div id="formHeader">Registration Form</div>
		
		<div id="formBody">
			<div class="formField">
				<input type="email" name="email" required placeholder="Email" />
			</div>
			
			<div class="formField">
				<input type="password" name="password" required placeholder="Password" />
			</div>
		
			<div>
				<input type="submit" value="Register" class="customButton" />
			</div>
			<div id='userNotes'>
				Already have an account? <a href='login.php'>Login</a>
			</div>
		</div>
		
	</form>

</div>

</body>
</html>