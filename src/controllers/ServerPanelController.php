<?php
class ServerPanelController extends BaseController {
    public function render()
    {

        $connection = ssh2_connect('89.203.249.69', 22);
        ssh2_auth_password($connection, 'root', 'tkEKdrgy');

        //$stream = ssh2_exec($connection, 'screen -S minecraft -p 0 -X stuff "stop^M"');

        $smarty = $this->env['smarty'];
        $smarty->display('serverpanel.tpl');
    }
}