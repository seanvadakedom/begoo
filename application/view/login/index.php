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
                                        <div class="icon col-xs-4 col-md-4 text-center"><a href=""><span class='fa fa-facebook-square fa-3x'></span></a></div>
                                        <div class="icon col-xs-4 col-md-4 text-center"><a href=""><span class='fa fa-twitter-square fa-3x'></span></a></div>
                                        <div class="icon col-xs-4 col-md-4 text-center"><a href=""><span class='fa fa-google-plus-square fa-3x'></span></a></div>
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