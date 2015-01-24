<div id="topBar">
    <div id="subTopBar">
	<a href="index.php"><img src="images/logo.png" style="height: 34px" /></a>
	<span id="user">
	    <?php
	    displayUsername();
	    require 'facebook.php';
	    $facebook = new Facebook(array(
		'appId' => '1536722463248850',
		'secret' => 'f7cf646224bd394ab6b61feca53b4900'
	    ));
	    if($facebook->getUser() != 0){
		$api = $facebook->api('me');
		echo "Hi " . $api[name];	    
	    }
	    ?>
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