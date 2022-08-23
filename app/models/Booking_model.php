<?php

class Booking_model
{
    private $table = 'booking';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBooking()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getBookingByID($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }


    public function createBookingHome($data)
    {
        $query = "INSERT INTO booking
            VALUES
            ('', :nama, :email, :phone, '', :arrival_date, :departure_date, :adults, :children, :facility, '', '', '', '', '')";
        $this->db->query($query);

        $this->db->bind('nama', $data['booking-name']);
        $this->db->bind('email', $data['booking-email']);
        $this->db->bind('phone', $data['booking-phone']);
        $this->db->bind('arrival_date', $data['booking-checkin']);
        $this->db->bind('departure_date', $data['booking-checkout']);
        $this->db->bind('adults', $data['booking-adults']);
        $this->db->bind('children', $data['booking-children']);
        $this->db->bind('facility', $data['booking-roomtype']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function createBooking($data)
    {
        $query = "INSERT INTO booking
            VALUES
            ('', :nama, :email, :phone, :country, :arrival_date, :departure_date, :adults, :children, :facility, :location, :payment_type, :card_number, :amount, :comments)";

        $this->db->query($query);

        $this->db->bind('nama', $data['booking-name']);
        $this->db->bind('email', $data['booking-email']);
        $this->db->bind('phone', $data['booking-phone']);
        $this->db->bind('country', $data['booking-country']);
        $this->db->bind('arrival_date', $data['booking-checkin']);
        $this->db->bind('departure_date', $data['booking-checkout']);
        $this->db->bind('adults', $data['booking-adults']);
        $this->db->bind('children', $data['booking-children']);
        $this->db->bind('facility', $data['booking-roomtype']);
        $this->db->bind('location', $data['booking-hotelloc']);
        $this->db->bind('payment_type', $data['booking-paymenttype']);
        $this->db->bind('card_number', $data['booking-cardnumber']);
        $this->db->bind('amount', $data['booking-amount']);
        $this->db->bind('comments', $data['booking-comments']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateBookingById($data)
    {
        $query = "UPDATE booking
            SET
            nama = :nama, email = :email, phone = :phone, country = :country, arrival_date = :arrival_date, departure_date = :departure_date, adults = :adults, children = :children, facility = :facility, location = :location, payment_type = :payment_type, card_number = :card_number, amount = :amount WHERE id = :id ";

        $this->db->query($query);

        $this->db->bind('nama', $data['booking-name']);
        $this->db->bind('email', $data['booking-email']);
        $this->db->bind('phone', $data['booking-phone']);
        $this->db->bind('country', $data['booking-country']);
        $this->db->bind('arrival_date', $data['booking-checkin']);
        $this->db->bind('departure_date', $data['booking-checkout']);
        $this->db->bind('adults', $data['booking-adults']);
        $this->db->bind('children', $data['booking-children']);
        $this->db->bind('facility', $data['booking-roomtype']);
        $this->db->bind('location', $data['booking-hotelloc']);
        $this->db->bind('payment_type', $data['booking-paymenttype']);
        $this->db->bind('card_number', $data['booking-cardnumber']);
        $this->db->bind('amount', $data['booking-amount']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteBooking($id)
    {
        $query = "DELETE FROM booking WHERE id = :id";

        $this->db->query($query);

        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
