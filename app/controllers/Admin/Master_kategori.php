<?php

class Master_kategori extends Controller{

    // Load Model
    public function __construct()
    {
        $this->smarty = new SmartyBC();
        $this->kategori_model = $this->model('kategori_model');
    }

    // Halaman Master Kategori
    public function index()
    {
        $kategori = $this->kategori_model->listing();
        $data = array(  'title'     => 'Halaman Master Kategori',
                        'kategori'    =>  $kategori,
                        'isi'       => '../Kategori/list.tpl'
                    );
        $this->smarty->assign('data', $data);
        $this->smarty->assign('active', 'kategori');
        $this->smarty->display('app/views/Admin/layout/wrapper.tpl');
    }

    public function tambah()
    {
        if (!$_POST) {
            $data = array(  'title'     =>  "Tambah Kategori",
                            'isi'       => '../Kategori/tambah.tpl'
                        );
            $this->smarty->assign('data', $data);
            $this->smarty->assign('active', 'kategori');
            $this->smarty->display('app/views/Admin/layout/wrapper.tpl');
        }else {
            $cek = $this->kategori_model->tambah($_POST);
            if(!$cek) {
                Flash::set_flashdata('warning', 'Kategori sudah digunakan, silahkan ganti!');
                header('Location: '.BASE_URL.'admin/master_kategori/tambah');
            }else {
                Flash::set_flashdata('success', 'Data telah ditambah');
                header('Location: '.BASE_URL.'admin/master_kategori');
            }
        }
    }

    public function edit($id=null)
    {
        if(!$_POST) {
            $kategori = $this->kategori_model->detail($id);
            if(isset($kategori)) {
                $data = array(  'title'     => 'Edit Data Kategori',
                                'kategori'    =>  $kategori,
                                'isi'       => '../Kategori/edit.tpl'
                            );
                $this->smarty->assign('data', $data);
                $this->smarty->assign('active', 'kategori');
                $this->smarty->display('app/views/Admin/layout/wrapper.tpl');
            }else {
                $this->smarty->display('app/views/error/404.tpl');
            }
        }else {
            $data = array(  'id'        =>  $id,
                            'kategori'  =>  $_POST['kategori']
                        );
            $cek = $this->kategori_model->edit($data);
            if(!$cek) {
                Flash::set_flashdata('warning', 'Kategori sudah digunakan, silahkan ganti!');
                header('Location: '.BASE_URL.'admin/master_kategori');
            }else {
                Flash::set_flashdata('success', 'Data telah diedit');
                header('Location: '.BASE_URL.'admin/master_kategori');
            }
        }
    }

    public function delete($id=null)
    {
        if (!isset($id)) {
            $this->smarty->display('app/views/error/404.tpl');
        }else {
            $cek = $this->kategori_model->delete($id);
            if(!$cek) {
                $this->smarty->display('app/views/error/404.tpl');
            }else {
                Flash::set_flashdata('success', 'Data telah dihapus');
                header('Location: '.BASE_URL.'admin/master_kategori');
            }
        }
    }
}
?>