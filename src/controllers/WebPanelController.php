<?php
class WebPanelController extends BaseController {
    public function render()
    {

        $smarty = $this->env['smarty'];
        $webPanel = $this->env['webPanel'];
        $shop = $this->env['shop'];

        if (isset($_POST['itemName']) && isset($_POST['itemMcid']) && isset($_POST['itemDesc']) && isset($_POST['itemPrice'])){
            $webPanel->insertItem($_POST['itemName'], $_POST['itemMcid'], $_POST['itemDesc'], $_POST['itemPrice']);
        }

        $smarty->assign('itemArray', $shop->getItems());

        $smarty->display('webpanel.tpl');
    }
}