<?php
class ProfileController extends BaseController {
    public function render()
    {
        /*$database = $this->env['database'];
        $query = $database->prepare('SELECT * FROM prdel WHERE id=:id');
        $query->execute(['id' => '1']);
        $prdele = $query->fetch();
        echo $prdele['tvar'];*/

        $smarty = $this->env['smarty'];

        $smarty->assign('name','JandyCZ');
        $smarty->assign('role','Admin');
        $smarty->assign('email','franta@pepa.kudlacek');


        $smarty->display('profile.tpl');
    }
}