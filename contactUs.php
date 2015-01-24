<?php include 'functions.php'; ?>
<html>
    <head>
        <title>Cam Jobs</title>
        <link rel="shortcut icon" href="images/icon.ico" />
        <link href="style/main.css" rel="stylesheet" />     
    </head>
    <body>
        <div id="wrapper">
	    <?php include 'topBarAndNav.php' ?>
            <div class="main">
		<div id="contactsUs">
		    <div class="title">Contacts Us</div>
		    <table>
			<tr>
			    <td>Contact Person</td>
			    <td>Mr. Sokun Satya</td>
			</tr>
			<tr>
			    <td>Tel</td>
			    <td>012 345 678</td>
			</tr>
			<tr>
			    <td>Email</td>
			    <td>s.sangvat@gmail.com</td>
			</tr>
			<tr>
			    <td>Facebook Page</td>
			    <td><a href="#">facebook.com/camjobs</a></td>
			</tr>
		    </table>
		</div>
<!--		<script src="https://maps.googleapis.com/maps/api/js"></script>
		<script>
                    function initialize() {
                        var myLatlng = new google.maps.LatLng(11.560247, 104.922868);
                        var mapOptions = {
                            zoom: 16,
                            center: myLatlng
                        }
                        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

                        var marker = new google.maps.Marker({
                            position: myLatlng,
                            map: map,
                            title: 'Hello World!'
                        });
                    }

                    google.maps.event.addDomListener(window, 'load', initialize);

		</script>
		<div id="map-canvas" style="width: 980px;height: 500px;margin-top: 10px;"></div>-->
	    </div>
	    <div class="main">
		<div id="contactsUs">
		    <div class="title">About Us</div>
		    <p>
			-  We are a group of software engineers.   
		    </p>
		    <p>
			-  Our goals is to provide a convenient way for all job seekers and employers in Cambodia. 
		    </p>
		    <p>
			-  Unlike other web sites, we want to keep CamJobs.com free of charge and advertisement.   
		    </p>		    
		    <p>
			-  We also post new jobs on our <a href="#">Facebook Page</a> everyday, so don't forget to like our page.
		    </p>
		    <p>
			-  If you have any questions or suggestions, please contact us with information above.   
		    </p>
		    <p>
			-  Finally, we would like to say "Don't forget to be awsome !".
		    </p>
		</div>
	    </div>
            <div id="main">
                <div id="contactsUs">
		    <div class="title">Comment</div>
                    <table>
                        <tr>
                            <td>Name</td>
                            <td><input type="input" name="name" /></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="input" name="email" /></td>
                        </tr>
                        <tr>
                            <td>Comment</td> 
                            <td><textarea name="comment"></textarea></td>
                        </tr>
                    </table>
                </div>
            </div>
	    <div class="push"></div>
        </div>	
	<?php include 'bottomBar.php'; ?>
    </body>
</html>
