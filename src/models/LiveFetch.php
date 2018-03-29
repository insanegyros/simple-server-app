<?php
class LiveFetch{
    private $conn;
    public function __construct($conn){
        $this->conn = $conn;
    }
    public function fetchStatus($nick){
        $query = $this->conn->prepare('SELECT isLogged FROM auth WHERE `realname`=:name');
        $query->execute(['name' => $nick]);
        $user = $query->fetch();
        return $user['isLogged'];
    }
    public function fetchCoins($nick){
        $query = $this->conn->prepare('SELECT coins FROM DKCoins_players WHERE `name`=:name');
        $query->execute(['name' => $nick]);
        $user = $query->fetch();
        return $user['coins'];

    }
    public function fetchPrivilege($user){

    }

}