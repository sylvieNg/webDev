<!DOCTYPE html>
<html>

<head>
	<meta charset = "utf-8">
	<title>Simple To-do-List</title>
	<link rel = "stylesheet" type = "text/css" href = "style.css">
</head>

<body>

	<div class = "wrapper">

		<div class = "container">
			<h2>To-do-List</h2>
			<input type = "radio" name = "tab" id = "tab1" class = "sign-in" checked />
			<label for="tab1" class = "tab">Sign In </label>

			<input type = "radio" name = "tab" id = "tab2" class = "sign-up" />
			<label for="tab2" class = "tab">Sign Up </label>
			<div class = "sign-in-form">
				<form method="post" action="loginscript.php">
				<div class = "sign-in1">
					<div class = "detail">
						<label for="user" class = "label">Email</label>
						<input id = "user" name="email" class = "input" type = "text" />
					</div>

					<div class = "detail">
						<label for="pass" class = "label">Password</label>
						<input id = "pass" name="pass" class = "input" type = "password" data-type = "password" />
					</div>

					<div class = "detail">
						<input type = "submit" class = "btn" name="login" value = "Sign In" />
					</div>

					<div class = "line"></div>
				</div>
			</form>
			<form method="post" action="signup.php">
				<div class = "sign-up1">
					<div class = "detail">
						<label for="user" class = "label">Username</label>
						<input id = "user" name="username" class = "input" type = "text"/>
					</div>

					<div class = "detail">
						<label for="pass" class = "label">Password</label>
						<input id = "pass" name="password" class = "input" type = "password" data-type = "password" />
					</div>

					<div class = "detail">
						<label for="pass" class = "label">Repeat Password</label>
						<input id = "pass" name="repeat" class = "input" type = "password" data-type = "password"/>
					</div>

					<div class = "detail">
						<label for="mail" class = "label">Email</label>
						<input id = "mail" name="email" type = "email" class = "input" />
					</div>

					<div class = "detail">
						<input type = "submit" class = "btn" name="signup" value = "Sign Up" />
					</div>

					<div class = "line"></div>
				</div>
			</form>
			</div>
		</div>
	</div>
</body>
</html>