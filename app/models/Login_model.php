<?php

class Login_model
{
    private $table = 'users';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUsers()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getAuth($data)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE email= :email AND password= :password');
        $this->db->bind('email', $data['email']);
        $this->db->bind('password', $data['password']);

        return $this->db->single();
    }
}
