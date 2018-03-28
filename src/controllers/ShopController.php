<?php
class ShopController extends AuthController {
    private $smarty;
    private $shop;
    private $ws;

    public function __construct(Container $container)
    {
        parent::__construct($container);
        $this->smarty = $container->get("smarty");
        $this->shop = $container->get("shop");
        $this->ws = $container->get("ws");
    }
    public function render()
    {
        $smarty = $this->smarty;
        $shop = $this->shop;
        $amount = @$_POST['amount'] ?? 1;


        if (isset($_POST['itemId'])){
            $shop->buyItem('JandyCZ', $_POST['itemId'], $amount);
        }

        $smarty->assign('itemArray', $shop->getItems());
        $smarty->display('webshop.tpl');
    }

}