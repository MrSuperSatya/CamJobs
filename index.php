<html>
<head>
	<title>Cam Jobs</title>
	<link rel="shortcut icon" href="images/icon.ico" />
	<link href="style/main.css" rel="stylesheet" />
	<link href="style/sideNav.css" rel="stylesheet" />

    <!-- Start Auto Complete Search -->    
    <link href="style/jquery-ui-1.10.4.custom.css" rel="stylesheet" />
    <!-- End Auto Complete Search --> 
	<?php include 'vars.php'; ?>
</head>
<body>
	<div id="wrapper">
		<div id="topBar">
			<div id="subTopBar">
				<a href="index.php"><img src="images/logo.png" style="height: 34px" /></a>
				<span id="user">
					<?php
						$userName = "a";
						$userHasLogIn = "
							Welcome :
							<a id='userName' href='user.php'>$userName&nbsp;&#x25BE;</a>
							<div class='arrow-up'></div>
							<ul>                
								<li><a href='UserAccount.aspx'>My Account</a></li>
								<li><a href='LogOut.aspx'>Log Out</a></li>
							</ul>";
						$userNotLogIn = "<a id='userName' href='logIn.php'>Log in</a>";
						session_start();
						if($_SESSION['userName'])
							echo $userHasLogIn;
						else
							echo $userNotLogIn;
					?>
				</span>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
		</div>
		<div id="nav">
			<div id="subNav">
				<a href="findJobs.php" class="active">Find Jobs</a>
				<a href="postJobs.php">Post Jobs</a>
				<a href="ourServices.php">Our Services</a>
				<a href="contactUs.php">Cantact Us</a>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
		</div>
		<div id="main">	
			<div id="search">
				<input type="text" placeholder="Search job..." />
				<select> 
					<option>Accouting</option>
					<option>Information Technology</option>
				</select>
				<select> 
					<option>Phnom Penh</option>
				</select>
				<input type="submit" value="Search" />
				<div class="clear"></div>
				
			</div>
			<div id="jobCat">
				<table>
					<?php					
						for($i=0;$i<6;$i++){
							echo "<tr>";					
							for($j=0;$j<3;$j++){
								$no = $i*3+$j;
								echo "<td><a href='jobsByCat.php?cat=" . $no . "'>";
								echo $jobCat[$no];
								echo " (12)</a></td>";
							}
							echo "<tr>";
						}
					?>
				</table>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
		</div>	
		<div class="clear"></div>
	</div>	
</body>
</html>
