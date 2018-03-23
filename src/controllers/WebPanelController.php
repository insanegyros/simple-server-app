<?php
class WebPanelController extends BaseController {
    public function render()
    {
        $smarty = $this->env['smarty'];
        $smarty->display('webpanel.tpl');
    }
}