<?php
class PlayerPanelController extends BaseController {
    public function render()
    {
        $smarty = $this->env['smarty'];
        $smarty->display('playerpanel.tpl');
    }
}