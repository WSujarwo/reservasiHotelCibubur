<?php

class Dashboard_model
{
    private $table = 'booking';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBooking()
    {
        $this->db->query('SELECT * FROM' . $this->table);
        return $this->db->resultSet();
    }
}
