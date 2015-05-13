<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	
	<!-- Styles -->
	<!-- Font Awesom-->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<!--Custom Style-->
	<link rel="stylesheet" href="css/pages/login-register.css">
</head>
<body class='login-page'>
	<div class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-push-4">
                    <div class="container-fluid">
                        <div class="header"><span>Account Access</span></div>
                        <div class="login-box">
                            <form action="user.php">
                                <div class="form-group">
                                    <input type="text" placeholder="User name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="password" placeholder="Password" class="form-control">
                                </div>

                                <div class="form-group button-group">
                                    <button type='submit' class="btn btn-default">
                                        <span>Login</span><span class="fa fa-unlock-alt"></span>
                                    </button>
                                </div>
                                <div class="form-group">
                                    <div class="forget-pw">
                                        <a href=""><span>Forget password?</span></a>
                                    </div>
                                </div>
                            </form>
                            <div class="social-login">
                                <div class="header"><span>Login using</span></div>
                                <div class="icons row">
                                    <div class="icon col-xs-4 col-md-4"><a href=""><span class='fa fa-facebook fa-2x'></span></a></div>
                                    <div class="icon col-xs-4 col-md-4"><a href=""><span class='fa fa-twitter fa-2x'></span></a></div>
                                    <div class="icon col-xs-4 col-md-4"><a href=""><span class='fa fa-google fa-2x'></span></a></div>
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