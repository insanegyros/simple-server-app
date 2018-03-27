<?php
class ServerPanelController extends AdminController {
    private $smarty;
    private $ssh;


    public function __construct(Container $container)
    {
        parent::__construct($container);
        $this->smarty = $container->get("smarty");
        $this->ssh = $container->get("ssh");
    }
    public function render()
    {
        $smarty = $this->smarty;




        if(!isset($_GET['a'])){
            $_GET['a'] = '';
        }


        switch ($_GET['a']){
            case 'start':
                $this->ssh->exec('cd /home/server;screen -AmdS minecraft ./start.sh');
                header('Location: /index.php?p=serverpanel');
                break;
            case 'stop':
                $this->ssh->exec('screen -S minecraft -p 0 -X stuff \'stop^M\'');
                header('Location: /index.php?p=serverpanel');
                break;
        }



        $smarty->display('serverpanel.tpl');
    }
}