<?php
class VipController extends BaseController {
    public function render()
    {
        $smarty = $this->env['smarty'];
        $smarty->display('vip.tpl');
    }
}