<?php

class Shop
{
    private $conn;
    private $ws;
    private $fetch;
    private $user;

    public function __construct($conn, $ws, $fetch, $user)
    {
        $this->conn = $conn;
        $this->ws = $ws;
        $this->fetch = $fetch;
        $this->user = $user;
    }

    public function getItems()
    {
        $query = $this->conn->prepare('SELECT * FROM items');
        $query->execute();
        return $query->fetchAll();
    }

    public function getItem($id)
    {
        $itemQuery = $this->conn->prepare('SELECT * FROM items WHERE id=:id');
        $itemQuery->execute(['id' => $id]);
        return $itemQuery->fetch();
    }

    public function buyItem($player, $itemId, $amount)
    {
        $item = $this->getItem($itemId);
        $userCoins = $this->fetch->fetchCoins($this->user->getCurrentUser()['realname']);
        $itemPrice = ($item['price'] * $amount);
        if (!$item) {
            throw new Exception('Item is not vaild');
        }

        if (!$amount) {
            $amount++;
        }
        if($userCoins < $itemPrice){
            die('Insufficient coins...');
        }


        $this->ws->connect();
        $this->ws->sendCommand('give ' . $player . ' ' . $item['mcid'] . ' ' . $amount);
        $this->ws->sendCommand('coins remove ' . $player . ' ' . $itemPrice);
    }

    public function deleteItem($itemId)
    {
        $itemQuery = $this->conn->prepare('DELETE FROM items WHERE id=:id');
        $itemQuery->execute(['id' => $itemId]);
    }

    public function editItem($itemId, $newItem)
    {
        $newItem['id'] = $itemId;
        $itemToUpload = $this->conn->prepare('UPDATE items SET 
            `name` = :name, 
            `mcid` = :mcid,
            `desc` = :desc,
            `price` = :price
            WHERE `id` = :id');
        $itemToUpload->execute($newItem);
    }

    public function insertItem($item)
    {


        $itemToUpload = $this->conn->prepare('INSERT INTO items (`name`, `mcid`, `desc`, `price`)
        VALUES (:name, :mcid, :desc, :price)');
        $itemToUpload->execute($item);
    }
}