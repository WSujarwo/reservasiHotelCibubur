<?php

class table_booking extends Controller
{
    public function index()
    {
        $data = $this->model('Booking_model')->getAllBooking();

        $this->view('templates/header-dash');
        $this->view('table_booking/index', $data);
        $this->view('templates/footer-dash');
    }

    public function edit($id)
    {
        $data = $this->model('Booking_model')->getBookingByID($id);

        $this->view('templates/header-dash');
        $this->view('table_booking/edit', $data);
        $this->view('templates/footer-dash');
    }

    public function update()
    {
        session_start();
        $update = $this->model('Booking_model')->updateBookingById($_POST);

        if ($update > 0) {
            $_SESSION['success'] = "Booking berhasil diubah";

            header('location: ' . BASEURL . '/table_booking');
            exit;
        } else {
            $_SESSION['success'] = "Tidak ada perubahan";

            header('location: ' . BASEURL . '/table_booking');
            exit;
        }
    }

    public function delete($id)
    {
        session_start();
        $hapus = $this->model('Booking_model')->deleteBooking($id);

        if ($hapus > 0) {
            $_SESSION['success'] = "Data berhasil dihapus";

            header('location: ' . BASEURL . '/table_booking');
            exit;
        } else {
            $_SESSION['error'] = "Data gagal dihapus";

            header('location: ' . BASEURL . '/table_booking');
            exit;
        }
    }

    public function cetakPdf($id)
    {
        $data = $this->model('Booking_model')->getBookingByID($id);

        $this->view('table_booking/cetakPdf', $data);
    }
    
    public function templatePdf($id)
    {
        $data = $this->model('Booking_model')->getBookingByID($id);

        $this->view('table_booking/template_cetakPdf', $data);
    }

}