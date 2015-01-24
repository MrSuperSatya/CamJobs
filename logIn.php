<?php
$formUrl = 'logIn.php';
if (isset($_GET['fromPage'])) {
    $formUrl = "logIn.php?fromPage={$_GET['fromPage']}";
}

if (!empty($_POST)) {
    $redirectUrl = 'index.php';    
    if (isset($_GET['fromPage'])) {
	$redirectUrl = $_GET['fromPage'];	
    }
    
    include 'connectDB.php';

    $userName = $_POST['userName'];
    $password = $_POST['password'];

    $sql = "Select ID From Company Where Username=? and Password=?";
    $statement = $db->prepare($sql);
    $statement->execute(array($userName, $password));

    if ($statement->rowCount() == 1) {
	session_start();
	$_SESSION['userName'] = $userName;
	if ($userID = $statement->fetch(PDO::FETCH_NUM)) {
	    $_SESSION['userID'] = $userID[0];
	}
	
	header("Location: $redirectUrl");	
    } else {
	$incorrectPassword = true;
    }
}
?>

<html>
    <head>
        <title>Khmer Store</title>
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
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
	    
            <div class="main">	
		<div id="right">
		    <img src="images/job.jpg" width="400px" />
		</div>
                <div id="left">
                    <form method="post" action="<?php echo $formUrl;?>">
                        <span class="formTitle">
			    <?php
			    if (!empty($_GET) && isset($_GET['fromPage'])) {
				echo 'To post jobs please log in';
			    } else {
				echo 'Log in';
			    }
			    ?>		    
			</span>
			<table class="inputFormBox">
                            <tr>
                                <td>Username : </td>
                                <td><input class="requiredValidation" type="text" name="userName" /></td>
                            </tr>
                            <tr>
                                <td>Password : </td>
                                <td><input class="requiredValidation" type="password" name="password" /></td>
                            </tr>
			    <tr>
				<td></td>
				<td>
				    <?php
				    if (isset($incorrectPassword)) {
					echo 'The username or password you entered is incorrect.';
				    }
				    ?>
				</td>
			    </tr>
                            <tr>
                                <td></td>
                                <td><input class="button" type="submit" value="Log in" name="submit" /></td>
                            </tr>
			    <tr>
                                <td></td>
                                <td>
				    <a href = '$loginUrl'><img src='images/login with facebook.png' width='185px'/></a>
				</td>
                            </tr>
                        </table>
                    </form>
                </div>		
		<div class="clear"></div>
            </div>	
	    <div class="clear"></div>
        </div>	
    </body>
</html>
