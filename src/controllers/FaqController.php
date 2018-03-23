<?php
class FaqController extends BaseController {
    public function render()
    {
        $smarty = $this->env['smarty'];
        $smarty->display('faq.tpl');
    }
}