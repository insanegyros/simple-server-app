<?php
class VipController extends BaseController {
    public function render()
    {
        $smarty = $this->env['smarty'];
        $shop = $this->env['shop'];
        $smarty->display('vip.tpl');

        if (isset($_POST['vipId'])){
            $shop->buyVip($_POST['vipId'], 'JandyCZ');
        }
    }
}