<?php
class WebPanelController extends AdminController {
    private $smarty;
    private $webPanel;
    private $shop;

    public function __construct(Container $container)
    {
        parent::__construct($container);
        $this->smarty = $container->get("smarty");
        $this->webPanel = $container->get("webPanel");
        $this->shop = $container->get("shop");
    }
    public function render()
    {

        $smarty = $this->smarty;
        $webPanel = $this->webPanel;
        $shop = $this->shop;

        if (isset($_POST['itemName']) && isset($_POST['itemMcid']) && isset($_POST['itemDesc']) && isset($_POST['itemPrice'])){
            $webPanel->insertItem($_POST['itemName'], $_POST['itemMcid'], $_POST['itemDesc'], $_POST['itemPrice']);
        }

        $smarty->assign('itemArray', $shop->getItems());

        $smarty->display('webpanel.tpl');
    }
}