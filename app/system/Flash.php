<?php

class Flash {

    public function set_flashdata($tipe, $pesan)
    {
        $_SESSION['flash'] = [
            'tipe'  =>  $tipe,
            'pesan' =>  $pesan
        ];
    }

    public function flashdata()
    {
        if(isset($_SESSION['flash'])) {
            echo'<div class="alert alert-'.$_SESSION['flash']['tipe'].'">';
            echo''.$_SESSION['flash']['pesan'].'';
            echo'</div>';
            unset($_SESSION['flash']);
        }
    }
}
?>