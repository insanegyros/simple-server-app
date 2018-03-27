<?php

abstract class AdminController extends BaseController
{

    public function __construct(Container $container)
    {
        parent::__construct($container);
        $webuser = $container->get("webUser");
        $isAdmin = $webuser->isAdmin();
        if (!$isAdmin) {
            header('Location: /index.php');
            exit;
        }
    }
}