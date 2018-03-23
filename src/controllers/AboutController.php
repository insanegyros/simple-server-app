<?php
class AboutController extends BaseController {
    public function render()
    {
        $smarty = $this->env['smarty'];
        $smarty->display('about.tpl');
    }
}