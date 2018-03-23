<?php
class ServerPanelController extends BaseController {
    public function render()
    {
        $smarty = $this->env['smarty'];
        $smarty->display('serverpanel.tpl');
    }
}