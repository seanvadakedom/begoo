<?php

$id = '1600097676941058';
$secret = '3aec86199462d58b3eeeceab9027eacd';
// added in v4.0.0
require_once (APP.'libs/fb-sdk/autoload.php');
//require 'functions.php';


use Facebook\HttpClients\FacebookHttpable;
use Facebook\HttpClients\FacebookCurl;
use Facebook\HttpClients\FacebookCurlHttpClient;

use Facebook\Entities\AccessToken;
use Facebook\Entities\SignedRequest;

use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookOtherException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;
use Facebook\GraphSessionInfo;

// start session
session_start();

// init app with app id and secret
FacebookSession::setDefaultApplication( $id,$secret );

// login helper with redirect_uri
$helper = new FacebookRedirectLoginHelper( 'http://localhost/begoo/login' );

// see if a existing session exists
if ( isset( $_SESSION ) && isset( $_SESSION['fb_token'] ) ) {
  // create new session from saved access_token
  $session = new FacebookSession( $_SESSION['fb_token'] );
  
  // validate the access_token to make sure it's still valid
  try {
    if ( !$session->validate() ) {
      $session = null;
    }
  } catch ( Exception $e ) {
    // catch any exceptions
    $session = null;
  }
}  

if ( !isset( $session ) || $session === null ) {
  // no session exists
  
  try {
    $session = $helper->getSessionFromRedirect();
  } catch( FacebookRequestException $ex ) {
    // When Facebook returns an error
    // handle this better in production code
    print_r( $ex );
  } catch( Exception $ex ) {
    // When validation fails or other local issues
    // handle this better in production code
    print_r( $ex );
  }
  
}

// see if we have a session
if ( isset( $session ) ) {
  
  // save the session
  $_SESSION['fb_token'] = $session->getToken();
  // create a session using saved token or the new one we generated at login
  $session = new FacebookSession( $session->getToken() );
  
  // graph api request for user data
  $request = new FacebookRequest( $session, 'GET', '/me' );
  $response = $request->execute();
  // get response
  $graphObject = $response->getGraphObject();//->asArray();
  
  // print profile data
  //echo '<pre>' . print_r( $graphObject, 1 ) . '</pre>';
    
    $id = $graphObject->getProperty('id'); 
    $email = $graphObject->getProperty('email');
    $fname = $graphObject->getProperty('first_name');
    $lname = $graphObject->getProperty('last_name');
    $name = $graphObject->getProperty('name');
    $_SESSION['ID'] = $id;
    $_SESSION['EMAIL'] = $email;
    $_SESSION['FNAME'] = $fname;
    $_SESSION['LNAME'] = $lname;
    $_SESSION['FULLNAME'] = $name;
    $_SESSION['LOGINMETHOD'] = 'facebook';
  
  // print logout url using session and redirect_uri (logout.php page should destroy the session)
  //echo '<a href="http://localhost/facebook/logout.php">Logout</a>';
    header('Location:'.URL_PROTOCOL.'login/sociallogin');
  
} else {
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	
	<!-- Styles -->
    <!--Fonts-->
    <link rel="stylesheet" href="<?php echo URL_PROTOCOL; ?>css/libs/Fonts/fonts.css">
	<!-- Font Awesom-->
	<link rel="stylesheet" href="<?php echo URL_PROTOCOL; ?>css/libs/Font-Awesome/css/font-awesome.min.css">
	<!--Custom Style-->
	<link rel="stylesheet" href="<?php echo URL_PROTOCOL; ?>css/pages/login-register.css">
</head>
<body class='login-page'>
	<div class="main">
        <div class="container">
           <div class="big-logo">
               <div class="img"></div>
           </div>
            <div class="row">
                <div class="col-md-8 col-md-push-2">
                    <div class="container-fluid">
                        <div class="header green-bg row"><span>Login</span></div>
                        <div class="white-box row">
                            <div class="col-md-7 vr-right-md">
                                <form action="user.php">
                                    <!--<label for="">Enter User Name and Password</label>-->
                                    <div class="form-group">
                                        <input type="text" placeholder="User name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" placeholder="Password" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" id='remember-me' placeholder="Password" class="">
                                        <label for="remember-me">Remember me on this PC.</label>
                                    </div>
                                    <div class="form-group button-group text-center row">
                                        <button type='submit' class="btn btn-default col-xs-12 col-md-4 col-md-offset-4">
                                            <span>Login</span><span class="fa fa-unlock-alt"></span>
                                        </button>
                                    </div>
                                    <div class="form-group">
                                        <div class="forget-pw">
                                            <a href=""><span>Forget password?</span></a>
                                        </div>
                                    </div>
                                </form>
                            </div>    
                            <hr class='visible-sm-block visible-xs-block'>
                            <div class="col-md-5">
                                <div class="social-login">
                                    <div class="header"><span>Login using</span></div>
                                    <div class="icons row">
                                        <div class="icon col-xs-4 col-md-4 text-center"><a href="<?php echo $helper->getLoginUrl( array( 'email', 'user_friends' ) )  ?>"><span class='fa fa-facebook-square fa-3x'></span></a></div>
                                        <div class="icon col-xs-4 col-md-4 text-center"><a href="<?php echo URL_PROTOCOL.'login/twitter' ?>"><span class='fa fa-twitter-square fa-3x'></span></a></div>
                                        <div class="icon col-xs-4 col-md-4 text-center"><a href="<?php echo URL_PROTOCOL.'login/gplus' ?>"><span class='fa fa-google-plus-square fa-3x'></span></a></div>
                                    </div>
                                </div>
                                <hr>
                                <div class="register-link-box">
                                    <a href="<?php echo URL_PROTOCOL; ?>login/register"><span>Create an Account</span></a>
                                </div>
                             </div>
                        </div>

			        </div>
		        </div>
            </div>
        </div>

	</div>
</body>
</html>
<?php } ?>