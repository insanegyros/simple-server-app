<?php
class HomeController extends BaseController {
    public function render()
    {
        /*$database = $this->env['database'];
        $query = $database->prepare('SELECT * FROM prdel WHERE id=:id');
        $query->execute(['id' => '1']);
        $prdele = $query->fetch();
        echo $prdele['tvar'];*/

        $smarty = $this->env['smarty'];
        $query = $this->env['query'];


        $query->Connect('89.203.249.69', 25566);
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