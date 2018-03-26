<?php
class PlayerPanelController extends BaseController {
    public function render()
    {
        $smarty = $this->env['smarty'];
        $query = $this->env['query'];
        $query->Connect('89.203.249.69', 25566);
        $players = $query->getPlayers();
        $playerHandler = $this->env['playerHandler'];

        if ($players !== false){
            $smarty->assign('playersOnline', $players);
        } else {
            $smarty->assign('playersOnline', array(0 => 'Nobody is online right now...'));
        }
        if(isset($_POST['player'])){
            $playerHandler->makeAdmin($_POST['player']);
        }

        $smarty->display('playerpanel.tpl');
    }
}