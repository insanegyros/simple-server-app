<?php
class WebPanelController extends AdminController {
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

        $a = @$_GET['action'] ?? '';
        $id = @$_GET['id'];

        switch ($a){
            case 'del':
                $shop->deleteItem($id);
                header('Location: /index.php?p=webpanel');
                exit;
            case 'edit':
                $item = self::getItemFromPost();
                if ($item === null || $id === null){
                    die('NOOT NOOT');
                }
                $shop->editItem($id, $item);
                header('Location: /index.php?p=webpanel');
                exit;
            case 'insert':
                $item = self::getItemFromPost();
                if ($item === null){
                    die('NOOT NOOT');
                }
                $shop->insertItem($item);
                header('Location: /index.php?p=webpanel');
                exit;
        }
        if($id !== null){
            $smarty->assign('itemToEdit', $shop->getItem($id));
        }
        $smarty->assign('itemArray', $shop->getItems());

        $smarty->display('webpanel.tpl');
    }
    private static function getItemFromPost(){
        if (!isset($_POST['itemName']) || !isset($_POST['itemMcid']) || !isset($_POST['itemDesc']) || !isset($_POST['itemPrice'])) {
            return null;
        }
        return ['name' => $_POST['itemName'], 'mcid' => $_POST['itemMcid'], 'desc' => $_POST['itemDesc'], 'price' => $_POST['itemPrice']];
    }
}