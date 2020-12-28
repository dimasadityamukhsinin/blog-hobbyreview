<?php

class Kategori extends Controller{

    // Load Model
    public function __construct()
    {
        $this->smarty = new SmartyBC();
        $this->artikel_model = $this->model('artikel_model');
        $this->kategori_model = $this->model('kategori_model');
    }

    // Halaman Kategori
    public function index($kategori=null)
    {
        if (!isset($kategori)) {
            $this->smarty->display('app/views/error/404.tpl');
        }else {
            $artikel = $this->artikel_model->kategori($kategori);
            if(isset($artikel)) {
                $Datakategori = $this->kategori_model->listing();
                
                $data = array(  'title'     =>  $kategori,
                                'artikel'   =>  $artikel,
                                'kategori'  =>  $Datakategori,
                                'isi'       => '../Kategori/list.tpl'
                            );
                $this->smarty->assign('data', $data);
                $this->smarty->display('app/views/layout/wrapper.tpl');
            }else {
                $this->smarty->display('app/views/error/404.tpl');
            }
        }
    }
}
?>