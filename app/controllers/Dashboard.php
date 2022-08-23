<?php

class Dashboard extends Controller
{
    public function index()
    {
        $this->view('templates/header-dash');
        $this->view('dashboard/index');
        $this->view('templates/footer-dash');
    }

    public function users()
    {
        echo 'LIST USERS';
    }

    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();

        header('location: ' . BASEURL . '/login');
        exit;
    }
}
