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
           "base_url" => URL_PROTOCOL . 'login/sociallogin',

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
        echo $userid = $user_profile->identifier;
        //print_r( $twitter_user_profile );
        
    }
    public function facebook()
    {
        require APP . 'view/login/facebook/fbconfig.php';


    }
    public function sociallogin(){
        require APP . 'view/login/sociallogin.php';

    }

}

?>
