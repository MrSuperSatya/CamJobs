<?php include 'vars.php'; ?>
<?php
if (!empty($_POST)) {
    include 'connectDB.php';
    session_start();
    
    $companyID = $_SESSION['userID'];
    $title = $_POST['title'];
    $yearExp = $_POST['yearExp'];
    $function = $_POST['function'];
    $hiring = $_POST['hiring'];
    $salary = $_POST['salary'];
    $qual = $_POST['qual'];
    $sex = $_POST['sex'];
    $language = $_POST['language'];
    $age = $_POST['age'];
    $location = $_POST['location'];
    $postDate = $_POST['postDate'];
    $closingDate = $_POST['closingDate'];

    $sql = "INSERT INTO `Job`(`CompanyID`, `Title`, `YearExp`, `Function`, `Hiring`, " .
	    "`Salary`, `Qual`, `Sex`, `Language`, `Age`, `Location`, `PostDate`, `ClosingDate`)" .
	    " Values(?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $statement = $db->prepare($sql);
    try {
	$statement->execute(array(
	    $companyID, $title, $yearExp, $function, $hiring, $salary,
	    $qual, $sex, $language, $age, $location, $postDate, $closingDate
	));
    } catch (Exception $ex) {
	die('Cannot execute query: ' . $ex->getMessage());
    }
}
?>

<html>
    <head>
        <title>CamJobs</title>
        <link rel="shortcut icon" href="images/icon.ico" />
        <link href="style/main.css" rel="stylesheet" />
        <link href="style/pageLogIn.css" rel="stylesheet" />
	<script src="script/jquery-2.1.1.min.js"></script>
    </head>
    <body>
        <div id="wrapper">
            <div id="topBar">
                <div id="subTopBar">
                    <a href="index.php"><img src="images/logo.png" style="height: 34px" /></a>
                    <span id="user">
                        <?php
			    session_start();
			    if (isset($_SESSION['userName'])){
				$userName = $_SESSION['userName'];
				$userID = $_SESSION['userID'];
				
				$userName = ucwords($userName);
				$userHasLogIn = "
				    <a id='userName' href='user.php'>$userName&nbsp;&#x25BE;</a>
				    <div class='arrow-up'></div>
				    <ul>                
					<li><a href='userAccount.php'>My Account</a></li>
					<li><a href='jobPost.php'>My Jobs Post</a></li>
					<li><a href='logOut.php'>Log Out</a></li>
				    </ul>";				                            
                            
                                echo $userHasLogIn;
                            }
                            else{
				$userNotLogIn = "<a id='userName' href='logIn.php'>Log in</a>";
                                echo $userNotLogIn;                        
                            }
                        ?>
                    </span>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
            <div id="nav">
                <div id="subNav">
                    <a href="index.php">Find Jobs</a>
                    <a href="postJobs.php" class="active">Post Jobs</a>
                    <a href="ourServices.php">Our Services</a>
                    <a href="contactUs.php">Contact Us</a>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
            <div id="main">	
                <div id="">
                    <form method="post" action="postJobs.php">
                        <span class="formTitle">Post Jobs</span>
                        <table class="inputFormBox">
                            <tr><td><span class="formSubTitle">Job Information</span></td></tr>
                            <tr>
                                <td>Title : </td>
                                <td><input class="requiredValidation" type="text" name="title" /></td>
                            </tr>
                            <tr>
                                <td>Year of Experience : </td>
                                <td><input class="requiredValidation" type="text" name="yearExp" /></td>
                            </tr>
                            <tr>
                                <td>Function : </td>
                                <td>
                                    <select name="function">
                                        <?php
					for ($i = 0; $i < 9; $i++) {
					    echo "<option value='$i'>$functions[$i]</option>";
					}
					?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Number of Hiring : </td>
                                <td><input type="text" name="hiring" /></td>
                            </tr>					
                            <tr>
                                <td>Salary : </td>
                                <td><input type="text" name="salary" /></td>
                            </tr>
                            <tr>
                                <td>Qualification : </td>
                                <td>
                                    <select name="qual">
                                        <?php
					for ($i = 0; $i < 4; $i++) {
					    echo "<option value='$i'>$quals[$i]</option>";
					}
					?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Sex : </td>
                                <td>
                                    <select name="sex">
                                        <option value="both">Both</option>
					<option value="male">Male</option>
					<option value="female">Female</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Language : </td>
                                <td><input type="text" name="language" /></td>
                            </tr>
                            <tr>
                                <td>Age : </td>
                                <td><input type="text" name="age" /></td>
                            </tr>                            
			    <tr>
                                <td>Location : </td>
                                <td>
                                    <select name="location">
					<?php
					for ($i = 0; $i < 9; $i++) {
					    echo "<option value='$i'>$locations[$i]</option>";
					}
					?>
                                    </select>
                                </td>
                            </tr>
			    <tr>
                                <td>Post Date : </td>
                                <td><input type="text" name="postDate" /></td>
                            </tr>
			    <tr>
                                <td>Closing Date : </td>
                                <td><input type="text" name="closingDate" /></td>
                            </tr>
			    <tr>
                                <td></td>
                                <td><input class="button" type="submit" value="Post" name="submit" /></td>
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
