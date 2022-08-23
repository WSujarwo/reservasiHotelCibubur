<?php
session_start();
if (isset($_SESSION['id'])){

    header('location: ' . BASEURL . '/dashboard');
    exit;
    
}

class Login extends Controller
{
    public function index()
    {
        $this->view('login/index');
    }

    public function auth() {
        // return var_dump($this->model('Login_model')->getAuth($_POST));
        session_start();

        $validasi = 0;

        if ($_POST["email"] == "") {
            $_SESSION['error'] = "Login gagal !";

            $validasi = 1;
        }

        if ($_POST['password'] == "") {
            $_SESSION['error'] = "Login gagal !";

            $validasi = 1;
        }

        $user = $this->model('Login_model')->getAuth($_POST);

        if ($user) {
            $_SESSION['id'] = $user['id'];

            header('location: ' . BASEURL . '/dashboard');
            exit;
        } else {
            $_SESSION['error'] = "Login gagal !";

            $validasi = 1;
        }

        if ($validasi) {
            header('location: ' . BASEURL . '/login');
            exit;
        }
    }
}
