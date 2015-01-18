<?php include 'functions.php'; ?>
<html>
    <head>
	<title>	Khmer Store</title>
	<link rel="shortcut icon" href="images/icon.ico" />
	<link href="style/main.css" rel="stylesheet" />
    </head>
    <body>
	<div id="wrapper">
	    <div id="topBar">
		<div id="subTopBar">
		    <a href="index.php"><img src="images/logo.png" style="height: 34px" /></a>
		    <span id="user">
			<?php displayUsername(); ?>
                    </span>
		    <div class="clear"></div>
		</div>
		<div class="clear"></div>
	    </div>
	    <div id="nav">
		<div id="subNav">
		    <a href="index.php" class="active">Find Jobs</a>
		    <a href="postJobs.php">Post Jobs</a>
		    <a href="ourServices.php">Our Services</a>
		    <a href="contactUs.php">Contact Us</a>
		    <div class="clear"></div>
		</div>
		<div class="clear"></div>
	    </div>
	    <div class="main">	
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
		<div id="jobs">
		    <table>
			<col width="620">
			<col width="200">
			<col width="220">
			<col width="160">
			<tr>
			    <th>Job Title</th>
			    <th>Company</th>
			    <th>Location</th>
			    <th>Closing Date</th>
			</tr>
			<?php
			require_once 'connectDB.php';

			$sql = "Select J.ID,Title,Name,j.Location,ClosingDate" .
				" From Job As J,Company AS C" .
				" Where c.ID=j.CompanyID and Function=?" .
				' Order By J.PostDate Desc';
			$statement = $db->prepare($sql);

			try {
			    $statement->execute(array($_GET["cat"]));
			} catch (Exception $ex) {
			    die('Cannot execute query: ' . $ex->getMessage());
			}

			while ($row = $statement->fetch(PDO::FETCH_NUM)) {
			    echo "<tr>";
			    echo "<td><a href='job.php?id=$row[0]'>$row[1]</a></td>";
			    echo "<td><a href='#'>" . $row[2] . "</a></td>";
			    echo "<td>" . $locations[$row[3]] . "</td>";
			    echo "<td>" . date("d-m-Y", strtotime($row[4])) . "</td>";
			    echo "</tr>";
			}
			?>
		    </table>
		</div>
	    </div>
	    <div class="main">
		Hello
	    </div>	    
	</div>	
    </body>
</html>
