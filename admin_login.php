<!-- admin_login.php -->

<!DOCTYPE html>
<html>
<head>
	<title>admin_login</title>
	<!-- <link rel="stylesheet" type="text/css" href="CSS/css_file.css"> -->

	<style type="text/css">
		
.main_container
{
	background-color: pink;
	width: 900px;
	align-self: center;
	margin: 0 auto;
	height: 100%;

}

.sub_container
{
	background-color: #e6f2ff;
	margin-top: 20px;
	margin: 50px;
/*	background-color: red;
*/	padding: 20px;
	margin: 50px;
	width: 600px;
/*	align-self: center;
	text-align: center;
	vertical-align: center;*/
	margin: 0 auto;
	border-radius: 20px;
}

body
{
	background-image: url('images/bank_home_background.jpg');
}

	</style>
</head>
<body>
<div class="main_container">
	<div class="sub_container">
	<h3 align="right">
		<button>
			<a href="user_login.php">User?</a>
		</button>
	</h3>
		<h1 align="center" style="color: red"> Admin Login </h1>
		<hr>
		<form method="post" action="admin_authentication.php">
		<table border="1" cellpadding="5" cellspacing="3" align="center">
			<tr>
			<td>
				<label> User Name: </label>
			</td>
				<td>
					<input type="text" name="admin_name" placeholder="admin user name">
				</td>
			</tr>

			<td>
				<label> Password: </label>
			</td>
				<td>
					<input type="password" name="admin_password" placeholder="admin password">
				</td>
			</tr>
			<tr align="center">
				<td colspan="2">
					<input type="submit" name="login">	
				</td>
			</tr>

		</table>
		<hr>

		</form>	
	</div>
</div>



</body>
</html>