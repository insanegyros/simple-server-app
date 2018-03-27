<?php

abstract class AuthController extends BaseController
{

    public function __construct(Container $container)
    {
        parent::__construct($container);
        $webuser = $container->get("webUser");
        $loggedIn = $webuser->isLogged();
        if (!$loggedIn) {
            header('Location: /index.php');
            exit;
        }
    }
}