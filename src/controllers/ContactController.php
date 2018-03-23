<?php
class ContactController extends BaseController {
    public function render()
    {
        $smarty = $this->env['smarty'];
        $smarty->display('contact.tpl');
    }
}