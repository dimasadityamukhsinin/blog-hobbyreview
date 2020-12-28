<?php

class Simple_login
{
    
    //Fungsi Login
    public function login($username,$password)
    {
        $pengguna_model = Controller::model('pengguna_model');
        $check = $pengguna_model->login($username,$password);
        if($check)
        {
            //Cek Role
            if($check['role'] == "Admin") {
                //Buat session
                $_SESSION['pengguna'] = $check;
                //jika sukses tampil halaman admin yang diproteksi
                header('Location: '.BASE_URL.'admin/dashboard');
            }else if($check['role'] == "Author") {
                //Buat session
                $_SESSION['pengguna'] = $check;
                //jika sukses tampil halaman author yang diproteksi
                header('Location: '.BASE_URL.'author/dashboard');
            }
        }else{
            Flash::set_flashdata('warning', 'Email atau Password Salah!');
            header('Location: '.BASE_URL.'login');
        }
    }
    
    //Fungsi cek login admin
    public function cek_loginAdmin()
    {
        //Mmeriksa apakah session sudah atau belum, jika belum alihkan ke halaman login
        if($_SESSION['pengguna']['role'] != "Admin"){
            Flash::set_flashdata('warning', 'Anda belum login!');
            header('Location: '.BASE_URL.'login');
        }
    }
    
    //Fungsi cek login author
    public function cek_loginAuthor()
    {
        //Mmeriksa apakah session sudah atau belum, jika belum alihkan ke halaman login
        if($_SESSION['pengguna']['role'] != "Author"){
            Flash::set_flashdata('warning', 'Anda belum login!');
            header('Location: '.BASE_URL.'login');
        }
    }
    
    //Fungsi logout
    public function logout()
    {
        // Membuang semua session yang telah diset pada saat login
        unset($_SESSION['pengguna']);
        // Setelah session dibuang, maka dialihkan ke halaman login kembali
        Flash::set_flashdata('success', 'Anda berhasil logout');
        header('Location: '.BASE_URL.'login');
    }
}