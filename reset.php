<?php 

include 'config.php';

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: home.php");
}

if (isset($_POST['submit'])) {
	$old_password = $_POST['old_password'];
	$confirm_password = $_POST['confirm_password'];
	$new_password = $_POST['new_password'];
	$old_password_to_check = md5($_POST['old_password']);
	$new_password_to_set = md5($_POST['new_password']);

	$sql = "SELECT * FROM users WHERE password='$old_password_to_check' LIMIT 1";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$username = $row['email'];
		/** Update the password now */
		if($new_password == $confirm_password) {
			$sqlUpdate = "UPDATE users SET password='$new_password_to_set' WHERE email='$username'";
			$resultUpdate = mysqli_query($conn, $sqlUpdate);
			echo "<script>alert('Password Updated!.')</script>";	
		} else {
			echo "<script>alert('New password and confirm password not matched!.')</script>";	
		}
		header("Location: home.php");
	} else {
		echo "<script>alert('Woops! Old password is wrong!.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="log.css">

	<title>Reset Form - Pure Coding</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800; color:#ba9a88;">Reset Password</p>
			<div class="input-group">
				<input type="password" placeholder="Old Password" name="old_password" value="<?php echo $_POST['old_password']; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="New Password" name="new_password" value="<?php echo $_POST['new_password']; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Confirm Password" name="confirm_password" value="<?php echo $_POST['confirm_password']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Reset</button>
			</div>
			<p class="login-register-text" style="text-align: center;">Vrei sa renunti<a href="login.php"> Login Here</a>.</p>
		</form>
	</div>
</body>
</html>