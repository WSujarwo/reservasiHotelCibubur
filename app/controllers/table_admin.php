<?php

class table_admin extends Controller
{
    public function index()
    {
        $data = $this->model('Users_model')->getAllUsers();

        $this->view('templates/header-dash');
        $this->view('table_admin/index', $data);
        $this->view('templates/footer-dash');
    }

    public function edit($id)
    {
        $data = $this->model('Users_model')->getUserById($id);

        $this->view('templates/header-dash');
        $this->view('table_admin/edit', $data);
        $this->view('templates/footer-dash');
    }

    public function update()
    {
        // return var_dump($this->model('Users_model')->updateUser($_POST));
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
            //. Akhir Validasi

        // Cek adakah notif validasi, jika ada maka akan menjalankan dibawah ini
        if ($validasi) {
            header('location: ' . BASEURL . '/table_admin/edit/' . $_POST['id']);
            exit;
        }

        // jika tidak ada notif validasi maka akan simpan data
        if ( $this->model('Users_model')->updateUser($_POST) > 0 ) {

            $_SESSION['success'] = "Akun berhasil diubah";

            header('location: ' . BASEURL . '/table_admin');
            exit;
        } else {
            $_SESSION['success'] = "Tidak ada perubahan";

            header('location: ' . BASEURL . '/table_admin');
            exit;
        }
    }

    public function delete($id)
    {
        session_start();
        $hapus = $this->model('Users_model')->deleteUser($id);

        if ($hapus > 0) {
            $_SESSION['success'] = "Data berhasil dihapus";

            header('location: ' . BASEURL . '/table_admin');
            exit;
        } else {
            $_SESSION['error'] = "Data gagal dihapus";

            header('location: ' . BASEURL . '/table_admin');
        }
    }

    public function users()
    {
        echo 'LIST USERS';
    }
}