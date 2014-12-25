<?php
if (!empty($_POST)) {
    include 'connectDB.php';

    $userName = $_POST['userName'];
    $password = $_POST['password'];

    $sql = "Select ID From Company Where UserName=? and Password=?";
    $statement = $db->prepare($sql);
    $statement->execute(array($userName, $password));

    if ($statement->rowCount() == 1) {
	session_start();
	$_SESSION['userName'] = $userName;
	if($userID = $statement->fetch(PDO::FETCH_NUM)){
	    $_SESSION['userID'] = $userID[0];	
	}
	    
	header('Location: index.php');
    } else {
	$incorrectPassword = true;
    }
}
?>

<html>
    <head>
        <title>	Khmer Store</title>
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

            <div id="main">	
                <div id="">
                    <form method="post" action="logIn.php">
                        <span class="formTitle">Long in</span>
			<table class="inputFormBox">
                            <tr>
				<td><span class="formSubTitle">Log in</span></td>
			    </tr>
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
