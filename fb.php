<?php

require_once( 'Facebook/FacebookSession.php');
require_once( 'Facebook/FacebookRequest.php' );
require_once( 'Facebook/FacebookResponse.php' );
require_once( 'Facebook/FacebookSDKException.php' );
require_once( 'Facebook/FacebookRequestException.php' );
require_once( 'Facebook/FacebookRedirectLoginHelper.php');
require_once( 'Facebook/FacebookAuthorizationException.php' );
require_once( 'Facebook/GraphObject.php' );
require_once( 'Facebook/GraphUser.php' );
require_once( 'Facebook/GraphSessionInfo.php' );
require_once( 'Facebook/Entities/AccessToken.php');
require_once( 'Facebook/HttpClients/FacebookCurl.php' );
require_once( 'Facebook/HttpClients/FacebookHttpable.php');
require_once( 'Facebook/HttpClients/FacebookCurlHttpClient.php');

use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
//use Facebook\FacebookResponse; 
//use Facebook\FacebookSDKException;
//use Facebook\FacebookRequestException;
//use Facebook\FacebookAuthorizationException;
//use Facebook\GraphObject;
use Facebook\GraphUser;

//use Facebook\GraphSessionInfo;
//use Facebook\FacebookHttpable;
//use Facebook\FacebookCurlHttpClient;
//use Facebook\FacebookCurl;
//Stat Session
session_start();
$app_id = '1536722463248850';
$app_secret = 'f7cf646224bd394ab6b61feca53b4900';
$redirect_url = 'http://localhost/CamJobs/fb.php';

// Initialize application, create helper object and get fb sess
FacebookSession::setDefaultApplication($app_id, $app_secret);
$helper = new FacebookRedirectLoginHelper($redirect_url);
$sess = $helper->getSessionFromRedirect();

// if fb sess exists echo name 
if (isset($sess)) {
    //create request object,execute and capture response
    $request = new FacebookRequest($sess, 'GET', '/me');
    // from response get graph object
    $response = $request->execute();
    $graph = $response->getGraphObject(GraphUser::className());
    // use graph object methods to get user details
    $name = $graph->getName();
    echo "hi $name";
} else {
    //else echo login
    echo '<a href=' . $helper->getLoginUrl() . '>Login with facebook</a>';
}

