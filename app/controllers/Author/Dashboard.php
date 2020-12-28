<?php

class Dashboard extends Controller{

    // Load Model
    public function __construct()
    {
        $this->smarty = new SmartyBC();
        $this->artikel_model = $this->model('artikel_model');
    }

    // Halaman Dashboard Author
    public function index()
    {
        $artikel = $this->artikel_model->hitungArtikel();
        $data = array(  'title'     => 'Author Dashboard',
                        'artikel'   =>  $artikel,
                        'isi'       => '../Dashboard/list.tpl'
                    );
        $this->smarty->assign('data', $data);
        $this->smarty->assign('active', 'dashboard');
        $this->smarty->display('app/views/Author/layout/wrapper.tpl');
    }
}
?>