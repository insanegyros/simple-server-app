<?php
class Ssh{
    private $sshConn;
    public function __construct($user, $host, $passwd, $port = 22){
        $this->sshConn = ssh2_connect($host, $port);
        ssh2_auth_password($this->sshConn, $user, $passwd);
    }

    public function exec($cmd) {
        ssh2_exec($this->sshConn, $cmd);
    }
}