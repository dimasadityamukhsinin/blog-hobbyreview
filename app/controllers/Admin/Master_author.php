<?php

class Master_author extends Controller{

    // Load Model
    public function __construct()
    {
        $this->smarty = new SmartyBC();
        $this->pengguna_model = $this->model('pengguna_model');
    }

    // Halaman Master Author
    public function index()
    {
        $author = $this->pengguna_model->author();
        $data = array(  'title'     => 'Halaman Master Author',
                        'author'    =>  $author,
                        'isi'       => '../Author/list.tpl'
                    );
        $this->smarty->assign('data', $data);
        $this->smarty->assign('active', 'author');
        $this->smarty->display('app/views/Admin/layout/wrapper.tpl');
    }

    public function tambah()
    {
        if (!$_POST) {
            $data = array(  'title'     =>  "Tambah Author",
                            'isi'       => '../Author/tambah.tpl'
                        );
            $this->smarty->assign('data', $data);
            $this->smarty->assign('active', 'author');
            $this->smarty->display('app/views/Admin/layout/wrapper.tpl');
        }else {
            $cek = $this->pengguna_model->tambah($_POST);
            if(!$cek) {
                Flash::set_flashdata('warning', 'Email sudah digunakan, silahkan ganti!');
                header('Location: '.BASE_URL.'admin/master_author/tambah');
            }else {
                Flash::set_flashdata('success', 'Data telah ditambah');
                header('Location: '.BASE_URL.'admin/master_author');
            }
        }
    }

    public function edit($id=null)
    {
        if(!$_POST) {
            $author = $this->pengguna_model->detail($id);
            if(isset($author)) {
                $data = array(  'title'     => 'Edit Data Author',
                                'author'    =>  $author,
                                'isi'       => '../Author/edit.tpl'
                            );
                $this->smarty->assign('data', $data);
                $this->smarty->assign('active', 'author');
                $this->smarty->display('app/views/Admin/layout/wrapper.tpl');
            }else {
                $this->smarty->display('app/views/error/404.tpl');
            }
        }else {
            $data = array(  'id'    =>  $id,
                            'nama'  =>  $_POST['nama'],
                            'email' =>  $_POST['email']
                        );
            $cek = $this->pengguna_model->edit($data);
            if(!$cek) {
                Flash::set_flashdata('warning', 'Email sudah digunakan, silahkan ganti!');
                header('Location: '.BASE_URL.'admin/master_author');
            }else {
                Flash::set_flashdata('success', 'Data telah diedit');
                header('Location: '.BASE_URL.'admin/master_author');
            }
        }
    }

    public function delete($id=null)
    {
        if (!isset($id)) {
            $this->smarty->display('app/views/error/404.tpl');
        }else {
            $cek = $this->pengguna_model->delete($id);
            if(!$cek) {
                $this->smarty->display('app/views/error/404.tpl');
            }else {
                Flash::set_flashdata('success', 'Data telah dihapus');
                header('Location: '.BASE_URL.'admin/master_author');
            }
        }
    }

    public function ganti_password($id=null)
    {
        if(!$_POST) {
            $author = $this->pengguna_model->detail($id);
            if(isset($author)) {
                $data = array(  'title'     => 'Ganti Password '.$author['nama'],
                                'author'    =>  $author,
                                'isi'       => '../Author/ganti_password.tpl'
                            );
                $this->smarty->assign('data', $data);
                $this->smarty->assign('active', 'author');
                $this->smarty->display('app/views/Admin/layout/wrapper.tpl');
            }else {
                $this->smarty->display('app/views/error/404.tpl');
            }
        }else {
            $data = array(  'id'    =>  $id,
                            'password'  =>  $_POST['password']
                        );
            $this->pengguna_model->ganti_password($data);
            Flash::set_flashdata('success', 'Password telah diganti');
            header('Location: '.BASE_URL.'admin/master_author');
        }
    }
}
?>