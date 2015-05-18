<?php
class Login extends Controller{



    public function index()
    {

        require APP . 'view/login/login.php';

        //require APP . 'view/_templates/footer.php';
    }
    public function register()
    {
        // load views
        //require APP . 'view/_templates/header.php';
        require APP . 'view/login/register.php';
        //require APP . 'view/_templates/footer.php';
    }



    public function twitter()
    {
        session_start();
        $tkey = "V0xtupLLF4sN0Qlj7fTkLH5ko";
        $tsecret = "Q8wtbcD5c0TnHhGKHfbinhk4wqluAXEQrymncZLvBT3VRJlFXf";

        require_once(  APP . 'libs/hybridauth/Hybrid/Auth.php' );
        require_once(  APP . 'libs/hybridauth/Hybrid/Endpoint.php' );
        $config = array(
           "base_url" => URL_PROTOCOL . 'login/twitter',

           "providers" => array (
               "Twitter" => array (
                   "enabled" => true, "keys" => array ( "key" => $tkey, "secret" => $tsecret )
               )
           )
        );

        $hybridauth = new Hybrid_Auth( $config );
        
        if (isset($_REQUEST['hauth_start']) || isset($_REQUEST['hauth_done'])) {
            Hybrid_Endpoint::process();
        }
        $adapter = $hybridauth->authenticate( "Twitter" );
        $user_profile = $adapter->getUserProfile();
        echo "Hi there! " . $user_profile->displayName;
        $username = $user_profile->displayName;
        echo '<br>Email:'.$userid = $user_profile->email.'<br>';
        print_r( $user_profile );
        
        $username = $user_profile->displayName;
        $id = $user_profile->identifier;
        $fullname = $user_profile->firstName;
        $profilepic = $user_profile->photoURL;
        
        $_SESSION['ID'] = $id;
        $_SESSION['FULLNAME'] = $fullname;
        $_SESSION['USERNAME'] = $username;
        $_SESSION['PROFILEPIC'] = $profilepic;
        $_SESSION['LOGINMETHOD'] = 'twitter';
        
    }
    public function facebook()
    {
        require APP . 'view/login/facebooklogin.php';


    }
    public function gplus()
    {
        session_start();
        $gkey = "236764922020-d9rdrnjd3ah9fh7meaqpfbojvc3aij90.apps.googleusercontent.com";
        $gsecret = "9xYmjAvy1Rg4k7HyqmVe0u2C";

        require_once(  APP . 'libs/hybridauth/Hybrid/Auth.php' );
        require_once(  APP . 'libs/hybridauth/Hybrid/Endpoint.php' );
        $config = array(
           "base_url" => URL_PROTOCOL . 'login/gplus',

           "providers" => array (
               "Google" => array (
                   "enabled" => true, "keys" => array ( "id" => $gkey, "secret" => $gsecret )
               )
           )
        );

        $hybridauth = new Hybrid_Auth( $config );
        
        if (isset($_REQUEST['hauth_start']) || isset($_REQUEST['hauth_done'])) {
            Hybrid_Endpoint::process();
        }
        $adapter = $hybridauth->authenticate( "Google" );
        $user_profile = $adapter->getUserProfile();
        
        $name = $user_profile->displayName;
        $id = $user_profile->identifier;
        $email = $user_profile->email;
        $fname = $user_profile->firstName;
        $lname = $user_profile->lastName;
        $_SESSION['ID'] = $id;
        $_SESSION['EMAIL'] = $email;
        $_SESSION['FNAME'] = $fname;
        $_SESSION['LNAME'] = $lname;
        $_SESSION['FULLNAME'] = $name;
        $_SESSION['LOGINMETHOD'] = 'google';
        
        //print_r( $user_profile );
        
    }
    public function sociallogin(){
        require APP . 'view/login/sociallogin.php';

    }
    public function logout(){
        session_start();
        session_unset();
        //session_destroy();
        header('Location:'.URL_PROTOCOL.'login');
    }
}

?>
