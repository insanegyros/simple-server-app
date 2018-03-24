<?php
class Shop{
    private $conn;
    private $ws;
    public function __construct($conn, $ws){
        $this->conn = $conn;
        $this->ws = $ws;
    }
    public function getItems(){
        $query = $this->conn->prepare('SELECT * FROM items');
        $query->execute();
        return $query->fetchAll();
    }
    public function buyItem($player, $itemId, $amount){
        $itemQuery = $this->conn->prepare('SELECT * FROM items WHERE id=:id');
        $itemQuery->execute(['id' => $itemId]);
        $item = $itemQuery->fetch();

        if (!$item){
            throw new Exception('Item is not vaild');
        }

        $this->ws->connect();
        $this->ws->sendCommand('give ' . $player . ' ' . $item['mcid'] . ' ' . $amount);
        $this->ws->disconnect();
    }
}