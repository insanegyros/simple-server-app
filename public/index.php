<?php
require_once('../src/controllers/IController.php');
require_once('../src/controllers/BaseController.php');

require_once('../src/controllers/HomeController.php');
require_once('../src/controllers/AboutController.php');
require_once('../src/controllers/FaqController.php');
require_once('../src/controllers/VipController.php');
require_once('../src/controllers/ContactController.php');
require_once('../src/controllers/ShopController.php');
require_once('../src/controllers/ProfileController.php');
require_once('../src/controllers/WebPanelController.php');
require_once('../src/controllers/PlayerPanelController.php');
require_once('../src/controllers/ServerPanelController.php');
require_once('../src/controllers/NotFoundController.php');

require_once('../libs/websend/WebsenderAPI.php');
require_once('../libs/smarty/Smarty.class.php');
require_once('../libs/squery/MinecraftQuery.php');
require_once('../libs/squery/MinecraftQueryException.php');
use xPaw\MinecraftQuery;
use xPaw\MinecraftQueryException;

require_once('../src/Router.php');
require_once('../src/models/Shop.php');

$dsn = 'mysql:dbname=scotchbox;host=localhost';
$user = 'root';
$password = 'root';
$conn = new PDO($dsn, $user, $password);


$ws = new WebsenderAPI("89.203.249.69","kikot","9872");

$smarty = new Smarty();
$smarty->setTemplateDir('../templates');
$smarty->setCompileDir('../templates_c');

$shop = new Shop($conn, $ws);

$environment = [
    'smarty' => $smarty,
    'database' => $conn,
    'query' => new MinecraftQuery(),
    'shop' => $shop,
    'ws' => $ws,
    ];



if (!isset($_GET['p'])){
    $_GET['p'] = '';
}


$router = new Router();
$controllerName = $router->getController($_GET['p']);
$controller = new $controllerName($environment);
$controller->render();
