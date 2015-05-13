<?php
class Login extends Controller{
    public function index()
    {
        // load views
        //require APP . 'view/_templates/header.php';
        require APP . 'view/login/index.php';
        //require APP . 'view/_templates/footer.php';
    }
    public function register()
    {
        // load views
        //require APP . 'view/_templates/header.php';
        require APP . 'view/login/register.php';
        //require APP . 'view/_templates/footer.php';
    }
}

?>