<?php
class HomeController extends BaseController {

    private $smarty;
    private $query;
    public function __construct(Container $container)
    {
        parent::__construct($container);
        $this->smarty = $container->get("smarty");
        $this->query = $container->get("query");
    }

    public function render()
    {
        var_dump($_SESSION);

        $smarty = $this->smarty;
        $query = $this->query;

        $info = $query->GetInfo();
        $players = $query->getPlayers();

        if ($info == false){
            $status = "OFFLINE";
        } else {
            $status = "ONLINE";
        }

        if ($players !== false){
            $smarty->assign('playersOnline', $players);
        } else {
            $smarty->assign('playersOnline', array(0 => 'Nobody is online right now...'));
        }

        $smarty->assign('status', $status);
        $smarty->assign('serverInfo', $info);



        $smarty->display('index.tpl');
    }
}