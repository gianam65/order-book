<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../.././css/login.css">
	<title>Đăng ký</title>
</head>
<body>
	<div class="container">
		<form action="../.././src/process-register.php" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Đăng ký</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username">
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email">
			</div>
			<div class="input-group">
				<input type="text" placeholder="Phone" name="phone">
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password">
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword">
			</div>
			<div class="input-group">
				<button name="handleRegister" class="btn">Đăng ký</button>
			</div>
			<p class="login-register-text">Đã có tài khoản ? <a href="./login.php">Vui lòng đăng nhập</a>.</p>
		</form>
	</div>
</body>
</html>