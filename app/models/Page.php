<?php


class Page
{
  private $db;
  /**
   * Page constructor.
   */
  public function __construct()
  {
    $this->db = new Database();
  }

  public function addUser(){
    $this->db->query('INSERT INTO users SET name=:name, email=:email, status=:status');
    $values = array(
      'name' => 'test',
      'email' => 'test@host.loc',
      'status' => 'user'
    );
    foreach ($values as $param=>$value){
      $this->db->bind($param, $value);
    }
    $this->db->execute();
  }

  public function getUsers(){
    $this->db->query('SELECT * FROM users');
    return $this->db->getAll();
  }

  public function getOneUser(){
    $this->db->query('SELECT * FROM users WHERE id=:id');
    $this->db->bind('id', 2);
    return $this->db->getOne();
  }

  public function usersCount(){
    $this->getUsers();
    return $this->db->rowCount();
  }
}