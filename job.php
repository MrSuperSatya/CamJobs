<?php include 'functions.php'; ?>
<?php
include 'connectDB.php';

$sql = " Select J.ID,`Name`, `Title`, `Term`, `YearExp`, `Function`, " .
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
    $comID = $row[22];
    $comName = $row[23];    
    $type = $row[24];
    $industry = $row[25];
    $empSize = $row[26];
    $comLocation = $row[27];
    
    $title = $row[2];
    $term = $row[3];
    $yearExp = $row[4];
    $function = $functions[$row[5]];
    $hiring = $row[6];
    $salary = $row[7];
    $qual = $quals[$row[8]];
    $sex = $row[9];
    $language = $row[10];
    $age = $row[11];
    $location = $locations[$row[12]];
    $postDate = date("d-m-Y", strtotime($row[13]));
    $closingDate = date("d-m-Y", strtotime($row[14]));
    $description = $row[15];
    $requirement = $row[16];
    $contactPerson = $row[17];
    $phone = $row[18];
    $email = $row[19];
    $website = $row[20];
    $address = $row[21];
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
            <?php include 'topBarAndNav.php' ?>
            <div class="main">	
		<div id="jobTitle"><?= $title ?></div>
                <div id="detail">
		    <div class="subTitle">About Company</div>
		    <table id="company">
			<tr>
			    <td width="120px">Company : </td>
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
			    <td width="110px">Term : </td>
			    <td width="250px"><?= $term ?></td>
			    <td>Year of Exp : </td>
			    <td><?= $yearExp ?></td>
			</tr>
			<tr>     
			    <td>Function : </td>
			    <td><?= $function ?></td>
			    <td>Hiring : </td>
			    <td><?= $hiring ?></td>
			</tr>
			<tr>			    
			    <td>Salary : </td>
			    <td><?= $salary ?></td>
			    <td>Qualification : </td>
			    <td><?= $qual ?></td>
			</tr>					
			<tr>			    
			    <td>Sex : </td>
			    <td><?= $sex ?></td>
			    <td>Language : </td>
			    <td><?= $language ?></td>
			</tr>
			<tr>			    
			    <td>Age : </td>
			    <td><?= $age ?></td>
			    <td>Location : </td>
			    <td><?= $location ?></td>
			</tr>
			<tr>			    
			    <td>Post Date : </td>
			    <td><?= $postDate ?></td>
			    <td>Closing Date : </td>
			    <td><?= $closingDate ?></td>
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
                </div>
            </div>	
	    <?php include 'bottomBar.php';?>
        </div>	
    </body>
</html>
