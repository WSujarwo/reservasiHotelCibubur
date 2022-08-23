<?php
session_start();
if (isset($_SESSION['id'])){

    header('location: ' . BASEURL . '/dashboard');
    exit;
    
}

class Register extends Controller
{
    public function index()
    {
        $this->view('register/index');
    }

    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            session_start();
            $validasi = 0;

                // Bagian awal Validasi
                if ($_POST['name'] == "") {

                    $_SESSION['validasiNama'] = "Kolom nama wajib diisi";

                    $validasi = 1;
                }

                if ($_POST['email'] == "") {

                    $_SESSION['validasiEmail'] = "Kolom email wajib diisi";

                    $validasi = 1;
                }

                if ($_POST['password'] == "") {

                    $_SESSION['validasiPassword'] = "Password wajib diisi";

                    $validasi = 1;
                }

                if ($_POST['confirm_password'] == "") {

                    $_SESSION['validasiConfirm'] = "Repeat password wajib diisi";

                    $validasi = 1;
                }

                if ($_POST['password'] != $_POST['confirm_password']) {
                    $_SESSION['validasiSamePassword'] = "Password tidak sama";

                    $validasi = 1;
                } 
                //. Akhir Validasi

            // Cek adakah notif validasi, jika ada maka akan menjalankan dibawah ini
            if ($validasi) {
                header('location: ' . BASEURL . '/register');
                exit;
            }

            // jika tidak ada notif validasi maka akan simpan data
            if ( $this->model('Users_model')->createUser($_POST) > 0 ) {

                $_SESSION['success'] = "Akun berhasil dibuat";

                $validasi = 1;

                header('location: ' . BASEURL . '/login');
                exit;
            }
            

        } else {
            $this->view('register/index');
        }
    }


}
