<?php
class PlayerHandler{
    private $ws;
    public  function __construct($ws){
        $this->ws = $ws;
    }

    public function makeAdmin($player){
        $this->ws->connect();
        $this->ws->sendCommand('pex user ' . $player . ' group set admin');
        $this->ws->disconnect();
    }
    public function makeVip($player, $plan){
        $this->ws->connect();
        $this->ws->sendCommand('pex user ' . $player . ' group set ' . $plan);
        $this->ws->sendCommand('say ' . $player . ' bought a VIP plan!');
        $this->ws->disconnect();
    }
    public function kickPlayer($player){
        $this->ws->connect();
        $this->ws->sendCommand('kick ' . $player . ' Reason not specified');
        $this->ws->disconnect();
    }
    public function banPlayer($player){
        $this->ws->connect();
        $this->ws->sendCommand('ban ' . $player . ' Reason not specified');
        $this->ws->disconnect();
    }
}