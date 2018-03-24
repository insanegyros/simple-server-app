<?php
class ShopController extends BaseController {
    public function render()
    {
        $smarty = $this->env['smarty'];
        $shop = $this->env['shop'];


        if (!isset($_POST['amount'])){
            $amount = 1;
        } else {
            $amount = $_POST['amount'];
        }


        if (isset($_POST['itemId'])){
            $shop->buyItem('JandyCZ', $_POST['itemId'], $amount);
        }




        $smarty->assign('itemArray', $shop->getItems());
        $smarty->display('webshop.tpl');
    }

}