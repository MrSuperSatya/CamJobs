<?php include 'functions.php'; ?>
<?php
include 'connectDB.php';

$sql = " Select J.ID,`Name`, `Title`, `Level`, `Term`, `YearExp`, `Function`, " .
	" `Hiring`, `Salary`, `Qual`, `Sex`, `Language`, `Age`, J.`Location`, `PostDate`," .
	" `ClosingDate`, J.`Description`, `Requirement`, ContactPerson, Phone, Email," .
	" Website, Address, C.ID,C.Name,C.Type, C.Industry,C.empSize, C.`Location`" .
	" From Job As J,Company AS C" .
	" Where c.ID=j.CompanyID and J.ID = ?";
$statement = $db->prepare($sql);

try {
    $statement->execute(array($_GET['id']));
} catch (Exception $ex) {
    die('Cannot execute query: ' . $ex->getMessage());
}

if ($row = $statement->fetch(PDO::FETCH_NUM)) {
    $comID = $row[23];
    $comName = $row[24];    
    $type = $row[25];
    $industry = $row[26];
    $empSize = $row[27];
    $comLocation = $row[28];
    
    $title = $row[2];
    $level = $row[3];
    $term = $row[4];
    $yearExp = $row[5];
    $function = $functions[$row[6]];
    $hiring = $row[7];
    $salary = $row[8];
    $qual = $quals[$row[9]];
    $sex = $row[10];
    $language = $row[11];
    $age = $row[12];
    $location = $locations[$row[13]];
    $postDate = date("d-m-Y", strtotime($row[14]));
    $closingDate = date("d-m-Y", strtotime($row[15]));
    $description = $row[16];
    $requirement = $row[17];
    $contactPerson = $row[18];
    $phone = $row[19];
    $email = $row[20];
    $website = $row[21];
    $address = $row[22];
}
?>
<html>
    <head>
        <title>CamJobs</title>
        <link rel="shortcut icon" href="images/icon.ico" />
        <link href="style/main.css" rel="stylesheet" />
        <link href="style/job.css" rel="stylesheet" />
    </head>
    <body>
        <div id="wrapper">
            <div id="topBar">
                <div id="subTopBar">
                    <a href="index.php"><img src="images/logo.png" style="height: 34px" /></a>
                    <span id="user"> <?php displayUsername(); ?> </span>
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
            <div id="main">	
		<div id="jobTitle"><?= $title ?></div>
                <div id="detail">
		    <div class="subTitle">Company</div>
		    <table id="company">
			<tr>
			    <td width="140px">Company : </td>
			    <td width="180px"><a href="com.php?id=<?= $comID ?>"><?= $comName ?></a></td>
			</tr>
			<tr>                               
			    <td>Type : </td>
			    <td><?= $comTypes[$type] ?></td>
			</tr>
			<tr>
			    <td>Industry : </td>
			    <td><?= $industry ?></td>
			</tr>					
			<tr>
			    <td>Employee : </td>
			    <td><?= $empSize ?></td>
			</tr>
			<tr>
			    <td>Location : </td>
			    <td><?= $comLocation ?></td>
			</tr>
		    </table>
		    <div class="subTitle">Job Details</div>
		    <table id="job">
			<tr>
			    <td width="140px">Level : </td>
			    <td width="180px"><?= $level ?></td>
			    <td width="110px">Term : </td>
			    <td width="250px"><?= $term ?></td>
			</tr>
			<tr>                               
			    <td>Year of Exp : </td>
			    <td><?= $yearExp ?></td>
			    <td>Function : </td>
			    <td><?= $function ?></td>
			</tr>
			<tr>
			    <td>Hiring : </td>
			    <td><?= $hiring ?></td>
			    <td>Salary : </td>
			    <td><?= $salary ?></td>
			</tr>					
			<tr>
			    <td>Qualification : </td>
			    <td><?= $qual ?></td>
			    <td>Sex : </td>
			    <td><?= $sex ?></td>
			</tr>
			<tr>
			    <td>Language : </td>
			    <td><?= $language ?></td>
			    <td>Age : </td>
			    <td><?= $age ?></td>
			</tr>
			<tr>
			    <td>Location : </td>
			    <td><?= $location ?></td>
			    <td>Post Date : </td>
			    <td><?= $postDate ?></td>
			</tr>
			<tr>
			    <td>Closing Date : </td>
			    <td><?= $closingDate ?></td>
			    <td></td>
			    <td></td>
			</tr>
		    </table>
		    <div class="subTitle">Job Description</div>
		    <div><pre><?= $description ?></pre></div>
		    <div class="subTitle">Job Requirement</div>
		    <div><pre><?= $requirement ?></pre></div>
		    <div class="subTitle">Contact Information</div>
		    <table id="contact">
			<tr>
			    <td width="180px">Contact Person</td>
			    <td><?= $contactPerson ?></td>
			</tr>
			<tr>
			    <td>Phone</td>
			    <td><?= $phone ?></td>
			</tr>
			<tr>
			    <td>Email</td>
			    <td><?= $email ?></td>
			</tr>
			<tr>
			    <td>Website</td>
			    <td><a href='http://<?= $website ?>'><?= $website ?></a></td>			    
			</tr>
			<tr>
			    <td>Address</td>
			    <td><?= $address ?></td>
			</tr>
		    </table>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>	
            <div class="clear"></div>
        </div>	
    </body>
</html>
