<?php

class Users_model
{
    private $table = 'users';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllUsers()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getUserById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' where id = ' . $id);
        return $this->db->single();
    }

    public function createUser($data) {
        $query = "INSERT INTO users VALUES 
        ('', :name, :email, :password)";

        $this->db->query($query);

        $this->db->bind('name', $data['name']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('password', $data['password']);

        $this->db->execute();

        // return var_dump($this->db->rowCount());

        return $this->db->rowCount();
    }

    public function updateUser($data) {
        $query = "UPDATE users SET name = :name, email = :email, password = :password where id = :id";

        $this->db->query($query);

        $this->db->bind('name', $data['name']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        // return var_dump($this->db->rowCount());

        return $this->db->rowCount();
    }

    public function deleteUser($id)
    {
        $query = "DELETE FROM users WHERE id = :id";

        $this->db->query($query);

        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
