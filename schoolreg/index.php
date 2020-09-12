
<html>
<head>
	<title> Student / Teacher Login and Registration </title>
	<link rel="stylesheet" href="style.css">
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
</head>
<body class="frontpage">
		<h1 class="indexheading">Scholarship Form</h1>
		<div class="form-box">
			<div class="button-box">
					<div id="btn"></div>
					<button type="button" class="toggle-btn" onclick="login()">Log In</button>
					<button type="button" class="toggle-btn" onclick="register()">Register</button>
			</div>

			<form id="login" class="input-group" action="validation.php" method="post">
				<input type="text" name="user" class="input-field" placeholder="User Name" required>
				<input type="password" name="password" class="input-field" placeholder="Password" required>
				<button type="submit" class="submit-btn" >Log In</button>
			</form>

			<form id="register" class="input-group" action="registration.php" method="post">

				<input type="text" name="user" class="input-field" placeholder="User Name" required>
				<div class="form-group radio">
					<label>Gender:</label>
					<input type="radio" name="authority" value="M" required>Male
							<input type="radio" name="authority" value="F" required>Female
				</div>

				<input type="password" name="password" class="input-field" placeholder="Password" required>
				<input type="password" name="password2" class="input-field" placeholder="Confirm Password" required>
				<button type="submit" class="submit-btn" >Register</button>
			</form>
		</div>

<script>

var x = document.getElementById("login");
var y = document.getElementById("register");
var z = document.getElementById("btn");

function register() {

	x.style.left = "-400px";
	y.style.left = "50px";
	z.style.left = "110px";
}


function login() {

	x.style.left = "50px";
	y.style.left = "450px";
	z.style.left = "0";
}

</script>


</body>
</html>
