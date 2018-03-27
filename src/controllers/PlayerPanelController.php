<?php
class PlayerPanelController extends AdminController {
    private $smarty;
    private $query;
    private $playerHandler;

    public function __construct(Container $container)
    {
        parent::__construct($container);
        $this->smarty = $container->get("smarty");
        $this->query = $container->get("query");
        $this->playerHandler = $container->get("playerHandler");
    }
    public function render()
    {
        $smarty = $this->smarty;
        $query = $this->query;
        $playerHandler = $this->playerHandler;
        $players = $query->getPlayers();



        if(!isset($_GET['a'])){
            $_GET['a'] = '';
        }


        switch ($_GET['a']){
            case 'ban':
                $playerHandler->banPlayer($_GET['u']);
                header('Location: /index.php?p=playerpanel');
                break;
            case 'kick':
                $playerHandler->kickPlayer($_GET['u']);
                header('Location: /index.php?p=playerpanel');
                break;
            case 'admin';
                $playerHandler->makeAdmin($_GET['u']);
                header('Location: /index.php?p=playerpanel');
                break;
        }



        if ($players !== false){
            $smarty->assign('playersOnline', $players);
        } else {
            $smarty->assign('playersOnline', array(0 => 'Nobody is online right now...'));
        }


        $smarty->display('playerpanel.tpl');
    }
}