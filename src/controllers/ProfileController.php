<?php
class ProfileController extends AuthController {
    private $smarty;
    private $webUser;

    public function __construct(Container $container)
    {
        parent::__construct($container);
        $this->smarty = $container->get("smarty");
        $this->webUser = $container->get("webUser");
    }
    public function render()
    {

        $smarty = $this->smarty;

        $smarty->assign('playerInfo', $this->webUser->getCurrentUser());


        $smarty->display('profile.tpl');
    }
}