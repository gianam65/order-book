<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../.././css/login.css">
	<title>Đăng nhập</title>
</head>
<body>
	<div class="container">
		<form action="../.././src/process-login-admin.php" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Admin đăng nhập</p>
			
			<div class="input-group">
				<input type="text" placeholder="Tên đăng nhập" name="admin-name">
			</div>
			<div class="input-group">
				<input type="password" placeholder="Mật khẩu" name="admin-password">
			</div>
			<div class="input-group">
				<button name="login-admin" class="btn">Đăng nhập</button>
			</div>
		</form>
	</div>
</body>
</html>