<?php
abstract class BaseController implements IController {

    public function __construct(Container $container){
        $webuser = $container->get("webUser");
        $smarty = $container->get('smarty');
        $smarty->assign('loggedIn', $webuser->isLogged());
        $smarty->assign('isAdmin', $webuser->isAdmin());
        $smarty->assign('user', $webuser->getCurrentUser());
    }
}