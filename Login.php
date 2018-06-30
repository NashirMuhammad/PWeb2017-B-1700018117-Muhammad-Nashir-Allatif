<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="login data/css data/1home.css">
</head>
<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (username == "mhs" && password =="mhs") {
			return true;
		}else{
			alert('Yang anda masukkan tidak valid');
			return false;
		}
	}

</script>
<body>
		<h1 class="judul" align="center">SIMERU MINI</h1>
		<h3>Muhammad Nashir Allatif-1700018117</h3>
		<div class="box">
		<form action="main.php" method="POST" onSubmit="return validasi()">
		<h2 class="beda">Login</h2>
		<p class="pad">User ID</p>
		<input type="text" name="username"  id="username" class="change"></input><br>
		<p class="pad">Password</p>
		<input type="password" name="password" id="password" class="change"></input>
		<p class="another" href="">Belum buat akun ?</p></br>
		<input type="submit" name="submit" value="login" class="tombol"></input>
		</form>
		</div>
</body>
</html>