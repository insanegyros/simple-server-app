<?php

class PlayerHandler
{
    private $ws;
    private $conn;

    public function __construct($ws, $conn)
    {
        $this->ws = $ws;
        $this->conn = $conn;
    }
    public function makeAdmin($player)
    {
        $this->ws->connect();
        $this->ws->sendCommand('pex user ' . $player . ' group set admin');
        $userToAdmin = $this->conn->prepare('UPDATE auth SET `isAdmin` = "1" WHERE realname=:player');
        $userToAdmin->execute([
            'player' => $player,
        ]);
    }
    public function revokeAdmin($player)
    {
        $this->ws->connect();
        $this->ws->sendCommand('pex user ' . $player . ' group set vip');
        $userRevokeAdmin = $this->conn->prepare('UPDATE auth SET `isAdmin` = "0" WHERE realname=:player');
        $userRevokeAdmin->execute([
            'player' => $player,
        ]);
    }

    public function makeVip($player, $plan, $price)
    {
        $this->ws->connect();
        $this->ws->sendCommand('pex user ' . $player . ' group set ' . $plan);
        $this->ws->sendCommand('coins remove ' . $player . ' ' . $price);
        $this->ws->sendCommand('say ' . $player . ' bought a VIP plan!');
        $userToAdmin = $this->conn->prepare('UPDATE auth SET `isVip` = "1" WHERE realname=:player');
        $userToAdmin->execute([
            'player' => $player,
        ]);
    }

    public function kickPlayer($player)
    {
        $this->ws->connect();
        $this->ws->sendCommand('kick ' . $player . ' Reason not specified');
        $this->ws->disconnect();
    }

    public function banPlayer($player)
    {
        $this->ws->connect();
        $this->ws->sendCommand('ban ' . $player . ' Reason not specified');
        $this->ws->disconnect();
    }
}