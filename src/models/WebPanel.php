<?php
class WebPanel{
    private $conn;
    public function __construct($conn){
        $this->conn = $conn;
    }
    public function insertItem($name, $mcid, $desc, $price){
        $itemToUpload = $this->conn->prepare('INSERT INTO items (`name`, `mcid`, `desc`, `price`)
        VALUES (:name, :mcid, :desc, :price)');
        $itemToUpload->execute([
            'name' => $name,
            'mcid' => $mcid,
            'desc' => $desc,
            'price' => $price
        ]);
    }
}