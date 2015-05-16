<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        
    <!--Fav Icon-->
    <link rel="icon" href="<?php echo URL_PROTOCOL; ?>fav.png" type="image/x-icon" />

	<title>Login</title>
	
	<!-- Styles -->
	<!-- Font Awesom-->
	<link rel="stylesheet" href="<?php echo URL_PROTOCOL; ?>css/libs/Font-Awesome/css/font-awesome.min.css">
	<!--Custom Style-->
	<link rel="stylesheet" href="<?php echo URL_PROTOCOL; ?>css/pages/login-register.css">
</head>
<body class='register-page'>
	<div class="main">
        <div class="container">
           <div class="big-logo">
               <div class="img"></div>
           </div>
            <div class="row">
                <div class="">
                    <div class="container-fluid">
                        <div class="header green-bg row"><span>Register Now</span></div>
                        <div class="white-box row">
                            <div class="col-md-3">
                                <div class="social-reg">
                                    <div class="header">
                                        <span class=''>Register Using</span>
                                    </div>
                                    <div class="icons row">
                                        <div class="icon col-xs-4 col-md-4 text-center"><a href=""><span class='fa fa-facebook-square fa-3x'></span></a></div>
                                        <div class="icon col-xs-4 col-md-4 text-center"><a href=""><span class='fa fa-twitter-square fa-3x'></span></a></div>
                                        <div class="icon col-xs-4 col-md-4 text-center"><a href=""><span class='fa fa-google-plus-square fa-3x'></span></a></div>
                                    </div>
                                </div>
                            </div>
                            <hr class='visible-sm-block visible-xs-block'>
                            <div class="col-md-8 vr-left-md">
                                <form action="user.php">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <input type="text" placeholder="First Name" class="form-control">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input type="text" placeholder="Last Name" class="form-control">
                                        </div>
                                     </div>
                                    
                                    <div class="form-group">
                                        <input type="email" placeholder="Email" class="form-control">
                                    </div>
                                    
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <input type="password" placeholder="Password" class="form-control">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input type="password" placeholder="Confirm Password" class="form-control">
                                        </div>
                                     </div>
                                     <div class="tandc">
                                         <p>
                                             Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus eos, animi provident esse. Illo neque accusamus corporis ut, asperiores officiis at ipsa harum unde, mollitia ullam atque repellendus molestiae dignissimos.
                                         </p>
                                     </div>
                                    
                                   

                                    <div class="form-group button-group text-right row">
                                        <button type='submit' class="btn btn-default col-xs-12 col-md-3 col-md-offset-9">
                                            <span>Sign Up</span><span class="fa fa-unlock-alt"></span>
                                        </button>
                                    </div>
                                    <div class="text-right">
                                        <a href="<?php echo URL_PROTOCOL; ?>login"><span>Already have an account?</span></a>
                                    </div>
                                </form>
                                
                            </div>
                        </div>

			        </div>
		        </div>
            </div>
        </div>

	</div>
</body>
</html>