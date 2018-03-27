<?php
class VipController extends AuthController {
    private $smarty;
    private $playerHandler;

    public function __construct(Container $container)
    {
        parent::__construct($container);
        $this->smarty = $container->get("smarty");
        $this->playerHandler = $container->get("playerHandler");
    }
    public function render()
    {
        $smarty = $this->smarty;
        $playerHandler = $this->playerHandler;


        $smarty->display('vip.tpl');

        if (isset($_POST['vipId'])){
            $playerHandler->makeVip('JandyCZ', $_POST['vipId'], $_POST['price']);
        }
    }
}