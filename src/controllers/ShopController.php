<?php
class ShopController extends BaseController {
    public function render()
    {
        $smarty = $this->env['smarty'];
        $itemArray = array("Dirt" => array('description' => "Nice Dirt", 'price' => "5"), "Wood" => array('description' => "Precious Wood", 'price' => "10"));
        $smarty->assign('itemArray', $itemArray);
        $smarty->display('webshop.tpl');
    }
}