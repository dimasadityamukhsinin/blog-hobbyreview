<?php

class Home extends Controller{

    // Load Model
    public function __construct()
    {
        $this->smarty = new SmartyBC();
        $this->artikel_model = $this->model('artikel_model');
        $this->kategori_model = $this->model('kategori_model');
    }

    // Halaman Dashboard
    public function index()
    {
        $artikel = $this->artikel_model->terbit();
        $kategori = $this->kategori_model->listing();

        $data = array(  'title'     => 'Home',
                        'artikel'   =>  $artikel,
                        'kategori'  =>  $kategori,
                        'isi'       => '../Home/list.tpl'
                    );
        $this->smarty->assign('data', $data);
        $this->smarty->display('app/views/layout/wrapper.tpl');
    }
}
?>