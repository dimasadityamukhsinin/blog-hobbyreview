<?php

class Login extends Controller{

    // Load Model
    public function __construct()
    {
        $this->smarty = new SmartyBC();
    }

    // Halaman Login
    public function index()
    {
        if(isset($_SESSION['pengguna'])) {
            if($_SESSION['pengguna']['role'] == "Admin") {
                header('Location: '.BASE_URL.'admin/dashboard');
                exit;
            }else {
                header('Location: '.BASE_URL.'author/dashboard');
                exit;
            }
        }else {
            if(!$_POST) {
                $data = array(  'title'     => 'Login'
                            );
                $this->smarty->assign('data', $data);
                $this->smarty->display('app/views/Login/list.tpl');
            }else {
                $email = $_POST['email'];
                $password = $_POST['password'];
                Simple_login::login($email, $password);
            }
        }
    }

    public function logout()
    {
        Simple_login::logout();
    }
}
?>