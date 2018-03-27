<?php
class ProfileController extends AuthController {
    private $smarty;
    private $conn;

    public function __construct(Container $container)
    {
        parent::__construct($container);
        $this->smarty = $container->get("smarty");
        $this->conn = $container->get("database");
    }
    public function render()
    {


        $smarty = $this->smarty;

        $smarty->assign('name','JandyCZ');
        $smarty->assign('role','Admin');
        $smarty->assign('email','franta@pepa.kudlacek');
        $smarty->assign('money','120');
        $smarty->assign('lastlogin','12-10-2018-15-48');


        $smarty->display('profile.tpl');
    }
}