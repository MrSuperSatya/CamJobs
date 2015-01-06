<?php include 'vars.php'; ?>
<?php
if (!empty($_POST)) {
    include 'connectDB.php';

    $userName = $_POST['userName'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $industry = $_POST['industry'];
    $empSize = $_POST['empSize'];
    $location = $_POST['location'];
    $contactPerson = $_POST['contactPerson'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $website = $_POST['website'];
    $address = $_POST['address'];
    $des = $_POST['des'];

    $sql = "Insert Into company(userName,password,name,industry,empSize,location,contactPerson," .
	    "phone,email,website,address,description) Values(?,?,?,?,?,?,?,?,?,?,?,?)";
    $statement = $db->prepare($sql);
    try {
	$statement->execute(array(
	    $userName, $password, $name, $industry, $empSize, $location,
	    $contactPerson, $phone, $email, $website, $address, $des
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

        <!-- Start Auto Complete Search -->    
        <link href="style/jquery-ui-1.10.4.custom.css" rel="stylesheet" />
        <!-- End Auto Complete Search -->	

        <script src="script/jquery-2.1.1.min.js"></script>
    </head>
    <body>
        <div id="wrapper">
            <div id="topBar">
                <div id="subTopBar">
                    <a href="index.php"><img src="images/logo.png" style="height: 34px" /></a>
                    <span id="user"></span>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>

            <div id="main">	
                <div id="">
                    <form method="post" action="register.php">
                        <span class="formTitle">Register</span>
                        <table class="inputFormBox">
                            <tr><td><span class="formSubTitle">Account Information</span></td></tr>
                            <tr>
                                <td>Username : </td>
                                <td><input class="requiredValidation" type="text" name="userName" /></td>
                            </tr>
                            <tr>
                                <td>Password : </td>
                                <td><input class="requiredValidation" type="password" name="password" /></td>
                            </tr>
                            <tr>
                                <td>Retype password : </td>
                                <td><input class="requiredValidation" type="password" name="retypePassword" /></td>
                            </tr>
                            <tr><td><span class="formSubTitle">Company Information</span></td></tr>
                            <tr>
                                <td>Company Name : </td>
                                <td><input class="requiredValidation" type="text" name="name" /></td>
                            </tr>
                            <tr>
                                <td>Industry : </td>
                                <td><input type="text" name="industry" /></td>
                            </tr>
                            <tr>
                                <td>Employee : </td>
                                <td>
                                    <select name="empSize">
                                        <option value="0-50">0 - 50</option>
                                        <option value="50-100">50 - 100</option>
                                        <option value="100-200">100 - 200</option>
                                        <option value="200-300">200 - 300</option>
                                        <option value="300+">300+</option>
                                    </select>
                                </td>
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
                                <td>Contact Person : </td>
                                <td><input type="text" name="contactPerson" /></td>
                            </tr>					
                            <tr>
                                <td>Phone : </td>
                                <td><input type="text" name="phone" /></td>
                            </tr>
                            <tr>
                                <td>Email : </td>
                                <td><input class="requiredValidation" type="text" name="email" id="email"></td>
                            </tr>
                            <tr>
                                <td>Website : </td>
                                <td><input type="text" name="website" /></td>
                            </tr>
                            <tr>
                                <td>Address : </td>
                                <td><textarea name="address"></textarea></td>
                            </tr>
                            <tr>
                                <td>Description : </td>
                                <td><textarea name="des"></textarea></td>
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

        <script>
            $(".requiredValidation").focusout(function () {
                if (!$(this).val()) {
                    if (!$(this).parent().parent().find("td.validationMsg").length)
                        $(this).parent().parent().append("<td class='validationMsg' style='color: red'>* Required</td>");
                }
                else
                    $(this).parent().parent().find("td.validationMsg").remove();

                enableSubmitButton();
            });
            function enableSubmitButton() {
                if ($("form .validationMsg").length)
                    $("form .button").attr('disabled', 'disabled');
                else
                    $("form .button").removeAttr('disabled');
            }
        </script>
    </body>
</html>
