<html>
<head>
	<title>	Khmer Store</title>
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
				<a href="Default.aspx"><img src="images/logo.png" style="height: 34px" /></a>
				<span id="user">
					Welcome :
					<a id="userName" href="user.php">Sangvat&nbsp;&#x25BE;</a>		
					<div class="arrow-up"></div>
					<ul>                
						<li><a href="UserAccount.aspx">My Account</a></li>
						<li><a href="LogOut.aspx">Log Out</a></li>
					</ul>
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
					<tr>
						<th>Job Title</th>
						<th>Compnay</th>
						<th>Location</th>
						<th>Closing Date</th>
					</tr>
					<?php	
						include 'connectDB.php';
							
						$sql = "Select Title,Name,j.Location,ClosingDate".
						" From Jobs As J,Company AS C".
						" Where c.ID=j.CompanyID and Function=" . $_GET["cat"];
						$result = mysql_query($sql, $con);
						if(!$result)
							die("Query failed : <br />".$sql."<br/>".mysql_error());
					
						while($row = mysql_fetch_array($result)){
							echo "<tr>";	
							echo "<td><a href='#'>".$row[0]."</a></td>";
							echo "<td><a href='#'>".$row[1]."</a></td>";
							echo "<td>".$locations[$row[2]]."</td>";
							echo "<td>".date("d-m-Y", strtotime($row[3]))."</td>";
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
