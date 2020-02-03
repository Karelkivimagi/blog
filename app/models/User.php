<?php


class User
{
    private $db;

    /**
     * User constructor.
     */
    public function __construct()
    {
        $this->db = new Database();
    }
    public function findUserByEmail($email){
        $this->db-> query ('SELECT * FROM users WHERE email = :email');
        $this->db->bind(':email', $email);
        $row = $this->db->getOne();


        if($this->db->rowCount() > 0){
            return true;
        } else {
            return false;
        }
    }
}

    public function register($data){
    $this->db->query (sql: 'INSERT INTO users(name, email, password) VALUES(:name, :email, :password)');
    $this->db->bind(param: ':name', $data['name']);
    $this->db->bind(param: ':email', $data['email']);
    $this->db->bind(param: ':password', $data['password']);

    if($this->db->execute()){
        return true;
    } else {
        return false;
    }


}