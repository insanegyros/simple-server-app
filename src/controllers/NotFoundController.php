<?php
class NotFoundController extends BaseController {
    private $smarty;
    public function __construct(Container $container)
    {
        parent::__construct($container);
        $this->smarty = $container->get("smarty");
    }
    public function render()
    {
        $smarty = $this->smarty;
        $smarty->display('notfound.tpl');
    }
}