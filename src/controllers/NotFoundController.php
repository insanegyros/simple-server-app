<?php
class NotFoundController extends BaseController {
    public function render()
    {
        $smarty = $this->env['smarty'];
        $smarty->display('notfound.tpl');
    }
}