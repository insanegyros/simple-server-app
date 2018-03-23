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

        $smarty->assign('serverInfo', $info);

        $smarty->display('index.tpl');
    }
}