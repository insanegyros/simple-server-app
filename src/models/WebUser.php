<?php
class WebUser{
    private $conn;
    const LOGGED_IN = 0;
    const USER_NULL = 1;
    const WRONG_PASSWORD = 2;

    public function __construct($conn){
        $this->conn = $conn;
    }
    public function login($nick, $passwd){
        $query = $this->conn->prepare('SELECT * FROM auth WHERE `realname`=:name');
        $query->execute(['name' => $nick]);
        $user = $query->fetch();

        if (!$user){
            return self::USER_NULL;
        }
        if(password_verify($passwd, $user['password'])){
            $_SESSION['loggedUser'] = $user;
            return self::LOGGED_IN;
        }
        return self::WRONG_PASSWORD;
    }
    public function getCurrentUser(){
        return $this->isLogged() ? $_SESSION['loggedUser']: null;
    }
    public function isLogged(){
        return array_key_exists('loggedUser', $_SESSION);
    }
    public function isAdmin(){
        $user = $this->getCurrentUser();
        return $user !== null && $user['isAdmin'] == 1;
    }
    public function logout(){
        unset($_SESSION['loggedUser']);
    }
}