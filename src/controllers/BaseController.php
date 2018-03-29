<?php
abstract class BaseController implements IController {

    public function __construct(Container $container){
        $webuser = $container->get("webUser");
        $smarty = $container->get('smarty');
        $fetch = $container->get('liveFetch');

        $user = $webuser->getCurrentUser()['realname'];
        $smarty->assign('fetchCoins', $fetch->fetchCoins($user));
        $smarty->assign('fetchStatus', $fetch->fetchStatus($user));

        $smarty->assign('loggedIn', $webuser->isLogged());
        $smarty->assign('isAdmin', $webuser->isAdmin());
        $smarty->assign('user', $webuser->getCurrentUser());
    }
}