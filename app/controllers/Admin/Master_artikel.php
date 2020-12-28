<?php

class Master_artikel extends Controller{

    // Load Model
    public function __construct()
    {
        $this->smarty = new SmartyBC();
        $this->artikel_model = $this->model('artikel_model');
        $this->kategori_model = $this->model('kategori_model');
    }

    // Halaman Master Artikel
    public function index()
    {
        $artikel = $this->artikel_model->listing();
        $data = array(  'title'     => 'Halaman Master Artikel',
                        'artikel'   =>  $artikel,
                        'isi'       => '../Artikel/list.tpl'
                    );
        $this->smarty->assign('data', $data);
        $this->smarty->assign('active', 'artikel');
        $this->smarty->display('app/views/Admin/layout/wrapper.tpl');
    }

    public function tambah()
    {
        if (!$_POST) {
            $kategori = $this->kategori_model->listing();
            $data = array(  'title'     =>  "Tambah Artikel",
                            'kategori'   =>  $kategori,
                            'isi'       => '../Artikel/tambah.tpl'
                        );
            $this->smarty->assign('data', $data);
            $this->smarty->assign('active', 'artikel');
            $this->smarty->display('app/views/Admin/layout/wrapper.tpl');
        }else {
            $cek = $this->artikel_model->cekSlug($_POST['judul']);
            if(!$cek) {
                Flash::set_flashdata('warning', 'Slug sudah digunakan, silahkan ganti!');
                header('Location: '.BASE_URL.'admin/master_artikel/tambah');
            }else {
                $exp = explode('.', $_FILES['gambar']['name']);
                $ext =  $exp[count($exp) - 1];
                $gambar = preg_replace('/[^A-Za-z0-9-]+/', '-', $_POST['judul']).'.'.$ext;
                $target = "assets/image/" .$gambar;
                if (!move_uploaded_file($_FILES['gambar']['tmp_name'], $target)) {
                    Flash::set_flashdata('warning', 'Gagal mengupload gambar. Silakan periksa pengaturan file untuk server Anda');
                    header('Location: '.BASE_URL.'admin/master_artikel/tambah');
                }else {
                    $data = array(  'pengguna_id'   =>  $_SESSION['pengguna']['id'],
                                    'kategori_id'   =>  $_POST['kategori'],
                                    'judul'         =>  $_POST['judul'],
                                    'slug'          =>  preg_replace('/[^A-Za-z0-9-]+/', '-', $_POST['judul']),
                                    'gambar'        =>  $gambar,
                                    'deskripsi'     =>  $_POST['deskripsi'],
                                    'tanggal'       =>  $_POST['tanggal'],
                                    'diterbitkan'   =>  $_POST['diterbitkan']
                                );
                    $this->artikel_model->tambah($data);
                    Flash::set_flashdata('success', 'Data telah ditambah');
                    header('Location: '.BASE_URL.'admin/master_artikel');
                }
            }
        }
    }

    public function edit($id=null)
    {
        if(!$_POST) {
            $artikel = $this->artikel_model->detail($id);
            $kategori = $this->kategori_model->listing();
            if(isset($artikel)) {
                $data = array(  'title'     => 'Edit Data Artikel',
                                'artikel'   =>  $artikel,
                                'kategori'  =>  $kategori,
                                'isi'       => '../Artikel/edit.tpl'
                            );
                $this->smarty->assign('data', $data);
                $this->smarty->assign('active', 'artikel');
                $this->smarty->display('app/views/Admin/layout/wrapper.tpl');
            }else {
                $this->smarty->display('app/views/error/404.tpl');
            }
        }else {
            $data = array(  'id'            =>  $id,
                            'judul'         =>  $_POST['judul'],
                            'deskripsi'     =>  $_POST['deskripsi'],
                            'kategori_id'   =>  $_POST['kategori'],
                            'tanggal'       =>  $_POST['tanggal'],
                            'diterbitkan'   =>  $_POST['diterbitkan']
                        );
            $cek = $this->artikel_model->edit($data);
            if(!$cek) {
                Flash::set_flashdata('warning', 'Slug sudah digunakan, silahkan ganti!');
                header('Location: '.BASE_URL.'admin/master_artikel');
            }else {
                Flash::set_flashdata('success', 'Data telah diedit');
                header('Location: '.BASE_URL.'admin/master_artikel');
            }
        }
    }

    public function delete($id=null)
    {
        if (!isset($id)) {
            $this->smarty->display('app/views/error/404.tpl');
        }else {
            $artikel = $this->artikel_model->detail($id);
            if(!$artikel) {
                $this->smarty->display('app/views/error/404.tpl');
            }else {
                unlink("assets/image/".$artikel['gambar']."");
                $this->artikel_model->delete($id);
                Flash::set_flashdata('success', 'Data telah dihapus');
                header('Location: '.BASE_URL.'admin/master_artikel');
            }
        }
    }

    public function ganti_gambar($id=null)
    {
        if(!isset($_FILES['gambar']['name'])) {
            $artikel = $this->artikel_model->detail($id);
            if(isset($artikel)) {
                $data = array(  'title'     => 'Ganti Gambar',
                                'artikel'    =>  $artikel,
                                'isi'       => '../Artikel/ganti_gambar.tpl'
                            );
                $this->smarty->assign('data', $data);
                $this->smarty->assign('active', 'artikel');
                $this->smarty->display('app/views/Admin/layout/wrapper.tpl');
            }else {
                $this->smarty->display('app/views/error/404.tpl');
            }
        }else {
            $artikel = $this->artikel_model->detail($id);
            if(!$artikel) {
                $this->smarty->display('app/views/error/404.tpl');
            }else {
                unlink("assets/image/".$artikel['gambar']."");
                
                $exp = explode('.', $_FILES['gambar']['name']);
                $ext =  $exp[count($exp) - 1];
                $gambar = preg_replace('/[^A-Za-z0-9-]+/', '-', $artikel['judul']).'.'.$ext;
                $target = "assets/image/" .$gambar;
                if (!move_uploaded_file($_FILES['gambar']['tmp_name'], $target)) {
                    Flash::set_flashdata('warning', 'Gagal mengupload gambar. Silakan periksa pengaturan file untuk server Anda');
                    header('Location: '.BASE_URL.'admin/master_artikel');
                }else {
                    Flash::set_flashdata('success', 'Gambar telah diganti');
                    header('Location: '.BASE_URL.'admin/master_artikel');
                }

            }
        }
    }
}
?>