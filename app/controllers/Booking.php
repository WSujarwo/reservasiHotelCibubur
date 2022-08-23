<?php
session_start();

class Booking extends Controller
{
    public function index()
    {
        $this->view('booking/index');
        $this->view('templates/footer');
    }
    
    public function createhome()
    {
        if ($this->model('Booking_model')->createBookingHome($_POST) > 0) {
            
            $_SESSION['success'] = "Pembayaran berhasil, data booking dikirim melalui email anda";

            header('Location: ' . BASEURL . '/');
            exit;
        }
    }

    public function create()
    {
        if ($this->model('Booking_model')->createBooking($_POST) > 0) {
            
            $_SESSION['success'] = "Pembayaran berhasil, data booking dikirim melalui email anda";
            
            header('Location: ' . BASEURL . '/');
            exit;
        }
    }
}
