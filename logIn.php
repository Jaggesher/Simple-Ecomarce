<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="CSS/login.css"/>
		<script src="myjs/login.js"></script>
	</head>

	<body class="cls0">
		<div class="cls">
			<div class="Empty"></div>
			<div class="login-block">

				<center class="lgin">Admin Login</center>

				<form action="LogMein.php" method="post" name="login_input" onsubmit="return Chk_Valid()">
					<input  type="text" name="userEmail" value="" placeholder="Email.." id="email" onclick="Reform1()" >
					</input>
					<input  type="password" name="usurePassword" value="" placeholder="Password.." id="password" onclick="Reform2()" maxlength="30">
				    </input>
				</br>
					<button type="submit" id="login">login</button>
				</form>
				<br/>
			</div>

			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			

			<div class="cls2">
				<br/>
				<center>All Right Preserved.</center>
		    </div>  
		</div>
	</body>
</html>