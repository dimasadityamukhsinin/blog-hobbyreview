<?php

class Dashboard extends Controller{

    // Load Model
    public function __construct()
    {
        $this->smarty = new SmartyBC();
        $this->artikel_model = $this->model('artikel_model');
        $this->kategori_model = $this->model('kategori_model');
        $this->pengguna_model = $this->model('pengguna_model');
    }

    // Halaman Dashboard Admin
    public function index()
    {
        $admin = $this->pengguna_model->hitungAdmin();
        $author = $this->pengguna_model->hitungAuthor();
        $artikel = $this->artikel_model->hitungArtikel();
        $kategori = $this->kategori_model->hitungKategori();
        $data = array(  'title'     => 'Admin Dashboard',
                        'admin'     =>  $admin,
                        'author'    =>  $author,
                        'artikel'   =>  $artikel,
                        'kategori'  =>  $kategori,
                        'isi'       => '../Dashboard/list.tpl'
                    );
        $this->smarty->assign('data', $data);
        $this->smarty->assign('active', 'dashboard');
        $this->smarty->display('app/views/Admin/layout/wrapper.tpl');
    }
}
?>