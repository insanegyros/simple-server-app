<?php
class VipController extends BaseController {
    public function render()
    {
        $smarty = $this->env['smarty'];
        $playerHandler = $this->env['playerHandler'];
        $smarty->display('vip.tpl');

        if (isset($_POST['vipId'])){
            $playerHandler->makeVip('JandyCZ', $_POST['vipId'], $_POST['price']);
        }
    }
}