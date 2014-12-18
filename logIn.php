<?php 

if(isset($_POST['userName']) && isset($_POST['password'])) {
	$userName = $_POST['userName'];
	$password = $_POST['password'];
	include 'connectDB.php';
	$sql = "Select UserName From Company Where UserName='$userName' and Password='$password'";
	$query = mysql_query($sql, $con);
	$numRows = mysql_num_rows($query);
	if($numRows != 0){
		session_start();
		$_SESSION['userName'] = $userName;
		echo $_SESSION['userName'];
	}
	else
		echo "Worng UserName/Password";
}
?>

<html>
<head>
	<title>	Khmer Store</title>
	<link rel="shortcut icon" href="images/icon.ico" />
	<link href="style/main.css" rel="stylesheet" />
	<link href="style/pageLogIn.css" rel="stylesheet" />

    <!-- Start Auto Complete Search -->    
    <link href="style/jquery-ui-1.10.4.custom.css" rel="stylesheet" />
    <!-- End Auto Complete Search -->	
	
	<script src="script/jquery-2.1.1.min.js"></script>
</head>
<body>
	<div id="wrapper">
		<div id="topBar">
			<div id="subTopBar">
				<a href="Default.aspx"><img src="images/logo.png" style="height: 34px" /></a>	
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
		</div>
		
		<div id="main">	
			<div id="">
				<form method="post" action="logIn.php">
				<span class="formTitle">Register</span>
				<table class="inputFormBox">
					<tr><td><span class="formSubTitle">Account Information</span></td></tr>
					<tr>
						<td>Username : </td>
						<td><input class="requiredValidation" type="text" name="userName" /></td>
					</tr>
					<tr>
						<td>Password : </td>
						<td><input class="requiredValidation" type="text" name="password" /></td>
					</tr>
					<tr>
						<td></td>
						<td><input class="button" type="submit" value="Register" name="submit" /></td>
					</tr>
				</table>
				</form>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
		</div>	
		<div class="clear"></div>
	</div>	
</body>
</html>
