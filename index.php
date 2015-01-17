<?php include 'functions.php'; ?>
<html>
    <head>
        <title>Cam Jobs</title>
        <link rel="shortcut icon" href="images/icon.ico" />
        <link href="style/main.css" rel="stylesheet" />
        <link href="style/sideNav.css" rel="stylesheet" />       
    </head>
    <body>
        <div id="wrapper">
            <div id="topBar">
                <div id="subTopBar">
                    <a href="index.php"><img src="images/logo.png" style="height: 34px" /></a>
                    <span id="user">
			<?php displayUsername(); ?>
                    </span>                    
                </div>                
            </div>
            <div id="nav">
                <div id="subNav">
                    <a href="findJobs.php" class="active">Find Jobs</a>
                    <a href="postJobs.php">Post Jobs</a>
                    <a href="ourServices.php">Our Services</a>
                    <a href="contactUs.php">Contact Us</a>                    
                </div>                
            </div>
            <div id="main">	
                <div id="search">
                    <input type="text" placeholder="Search..." />
                    <select> 			
			<?php
			    for($i=0;$i<count($functions);$i++){
				echo "<option value='$$i'>$functions[$i]</option>";
			    }
			?>
                    </select>
                    <select> 
                        <?php
			    for($i=0;$i<count($locations);$i++){
				echo "<option value='$$i'>$locations[$i]</option>";
			    }
			?>
                    </select>
                    <input type="submit" value="Search" />
                </div>
                <div id="jobCat">
                    <table>
			<?php
			// Set count for each job function
			$counts = getJobFunctionCounts();
			
			// Display all job functions
			$j = 0;
			for ($i = 0; $i < 12; $i++) {
			    echo "<tr>";
			    for ($j = 0; $j < 3 && $i * 3 + $j < 34; $j++) {
				$no = $i * 3 + $j;
				echo "<td><a href='jobsByCat.php?cat=" . $no . "'>";
				echo $functions[$no];
				echo " ($counts[$no])";
				echo "</a></td>";
			    }
			    echo "<tr>";
			}
			?>
                    </table>
                </div>
            </div>	
	    <div class="main">
		khkdsaf
	    </div>
        </div>	
    </body>
</html>
