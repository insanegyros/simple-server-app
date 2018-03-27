<?php
class Router {
    CONST routes = [
        '' => HomeController::class,
        'about' => AboutController::class,
        'contact' => ContactController::class,
        'faq' => FaqController::class,
        'vip' => VipController::class,
        'shop' => ShopController::class,
        'profile' => ProfileController::class,
        'playerpanel' => PlayerPanelController::class,
        'webpanel' => WebPanelController::class,
        'serverpanel' => ServerPanelController::class,
        'login' => LoginController::class,
    ];

    public function getController($page){
        if (array_key_exists($page, self::routes)){
            return self::routes[$page];
        }
        return NotFoundController::class;
    }
}