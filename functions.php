<?php

// -------------------  Vars  -----------------------------------------
// --------------------------------------------------------------------
$quals = array(
    "High School",
    "Bachelor Degreee",
    "Master Degree",
    "PhD, Doctor"
);
$functions = array(
    "Accouting",
    "Administration",
    "Architecture/Engineering",
    "Assistant/Secretary",
    "Audit/Taxation",
    "Banking/Insurance",
    "Catering/Restaurant",
    "Consultancy",
    "Customer Service",
    "Delivery/Shipping/Warehouse",
    "Design",
    "Education/Training",
    "Finance",
    "Hotel/Hospitality",
    "Human Resource",
    "Information Technology",
    "Lawyer/Legal Service",
    "Management",
    "Manufacturing",
    "Marketing",
    "Media/Advertising",
    "Medical/Health/Nursing",
    "Merchandising/Purchasing",
    "Operations",
    "Project Management",
    "Quality Control",
    "Resort/Casino",
    "Sales",
    "Security guard/Driver/Maid",
    "Technician",
    "Telecommunication",
    "Translation/Interpretation",
    "Travel Agent/Ticket Sales",
    "Others"
);
$locations = array(
    "Phnom Penh",
    "Banteay Meanchey ",
    "Battambang",
    "Kampong Cham ",
    "Kampong Chhnang ",
    "Kampong Speu ",
    "Kampong Thom ",
    "Kampot",
    "Kandal",
    "Kep",
    "Koh Kong",
    "Mondulkiri",
    "Oddor Meanchey",
    "Pailin",
    "Preah Sihanouk",
    "Preah Vihear",
    "Prey Veng",
    "Pursat",
    "Rattanakiri",
    "Siem Reap",
    "Stung Treng",
    "Svay Rieng",
    "Takeo",
    "Tboung Khmum"
);
$comTypes = array(
    "Private Company", 
    "Non Government Organization",
    "Government Organization"
);

// ---------------------------  Functions  ----------------------------------
// --------------------------------------------------------------------------

function displayUsername() {
    if (session_status() == PHP_SESSION_NONE) {
	session_start();
    }
    if (isset($_SESSION['userName'])) {
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
    } else {
	$userNotLogIn = "<a id='userName' href='logIn.php'>Log in</a>|" .
		"<a id='userName' href='register.php'>Register</a>";
	echo $userNotLogIn;
    }
}

function getJobFunctionCounts() {
    require_once 'connectDB.php';

    try {
	$sql = "Select `Function`, Count(ID) From Job Group By `Function` Order By `Function`";
	$query = $db->query($sql);
    } catch (Exception $ex) {
	die('Cannot execute query: ' . $ex->getMessage());
    }

    $counts = array();
    for ($i = 0; $i < count($GLOBALS['functions']); $i++) {
	$counts[$i] = 0;
    }

    while ($row = $query->fetch(PDO::FETCH_NUM)) {
	$counts[$row[0]] = $row[1];
    }

    return $counts;
}
?>