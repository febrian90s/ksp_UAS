<html>
<head>
	<title>Form Login KSP</title>
</head>
<body>
	<center>
	<form action="proses.php" method="POST" style="margin-top: 200px;">
		<h1>Login</h1>
		<label>Username :</label>
		<input type="text" name="username" placeholder="masukkan username" required="" autofocus="">
		<br/>
		<br/>
		<label>Password :</label>
		<input type="password" name="password" placeholder="masukkan password" required="">
		<br>
		<br>
		<button type="submit">LOGIN</button>
	</form>
	<!-- Menampung jika ada pesan -->
	<?php if(isset($_POST['login'])) {  ?>
	<label style="color:red;"><?php echo $_POST['login']; ?></label>
	<?php } ?>	
	</center>
</body>
</html>