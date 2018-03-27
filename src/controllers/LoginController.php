<?php
class LoginController extends BaseController {

    private $smarty;
    private $webUser;
    public function __construct(Container $container)
    {
        parent::__construct($container);
        $this->smarty = $container->get("smarty");
        $this->webUser = $container->get("webUser");
    }

    public function render(){

        if ($_GET['action'] === 'logout'){
            $this->webUser->logout();
            header('Location: /index.php');
        }

        if(!isset($_POST['nick']) || !isset($_POST['passwd'])){
            die('No credentials');
        }

        switch ($this->webUser->login($_POST['nick'], $_POST['passwd'])){
            case WebUser::WRONG_PASSWORD:
                die('Wrong Password');
            case WebUser::LOGGED_IN:
                header('Location: /index.php');
                exit;
            case WebUser::USER_NULL:
                die('User doesn\'t exist');

        }

    }
}