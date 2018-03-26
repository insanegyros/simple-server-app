<?php
class PlayerPanelController extends BaseController {
    public function render()
    {
        $smarty = $this->env['smarty'];
        $query = $this->env['query'];

        $query->Connect('89.203.249.69', 25566);
        $players = $query->getPlayers();
        $playerHandler = $this->env['playerHandler'];


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