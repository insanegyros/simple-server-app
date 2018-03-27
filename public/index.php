<?php

require_once('../libs/squery/MinecraftQuery.php');
require_once('../libs/squery/MinecraftQueryException.php');
use xPaw\MinecraftQuery;

require_once('../src/controllers/IController.php');
require_once('../src/controllers/BaseController.php');
require_once('../src/controllers/AuthController.php');
require_once('../src/controllers/AdminController.php');
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
require_once('../src/controllers/LoginController.php');

require_once('../libs/websend/WebsenderAPI.php');
require_once('../libs/smarty/Smarty.class.php');


require_once('../src/Router.php');
require_once('../src/Container.php');
require_once('../src/Ssh.php');
require_once('../src/models/Shop.php');
require_once('../src/models/WebPanel.php');
require_once('../src/models/PlayerHandler.php');
require_once('../src/models/WebUser.php');
session_start();

$definitions = [
    'database' => function(){
        $dsn = 'mysql:dbname=simpleserver;host=89.203.249.69';
        $user = 'jandy';
        $password = 'tkEKdrgy';
        $conn = new PDO($dsn, $user, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $conn;
    },
    'smarty' => function(){
        $smarty = new Smarty();
        $smarty->setTemplateDir('../templates');
        $smarty->setCompileDir('../templates_c');
        return $smarty;
    },
    'ws' => function(){
        $ws = new WebsenderAPI('89.203.249.69','DoshIsMyMoney','9872');
        $ws->connect();
        return $ws;
    },
    'shop' => function($c){
        return new Shop($c->get('database'), $c->get('ws'));
    },
    'webPanel' => function($c){
        return new WebPanel($c->get('database'));
    },
    'playerHandler' => function($c){
        return new PlayerHandler($c->get('ws'), $c->get('database'));
    },
    'query' => function(){
        $query = new MinecraftQuery();
        $query->Connect('89.203.249.69', 25566);
        return $query;
    },
    'ssh' => function(){
        return new Ssh('root','89.203.249.69','tkEKdrgy');
    },
    'webUser' => function($c){
        return new WebUser($c->get('database'));
    }
];

$container = new Container($definitions);


if (!isset($_GET['p'])){
    $_GET['p'] = '';
}


$router = new Router();
$controllerName = $router->getController($_GET['p']);
$controller = new $controllerName($container);
$controller->render();
