<?php

class Artikel extends Controller{

    // Load Model
    public function __construct()
    {
        $this->smarty = new SmartyBC();
        $this->artikel_model = $this->model('artikel_model');
        $this->kategori_model = $this->model('kategori_model');
    }

    // Halaman Artikel
    public function index($slug=null)
    {
        if (!isset($slug)) {
            $this->smarty->display('app/views/error/404.tpl');
        }else {
            $artikel = $this->artikel_model->slug($slug);
            if(isset($artikel)) {
                $kategori = $this->kategori_model->listing();
                
                $data = array(  'title'     => $artikel['judul'],
                                'artikel'   =>  $artikel,
                                'kategori'  =>  $kategori,
                                'isi'       => '../Artikel/list.tpl'
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