<?php

class Flasher {

    public static function setFlash($pesan, $aksi, $tipe, $tabel) 
    {
         $_SESSION['flash'] = [
             'pesan' => $pesan,
             'aksi' => $aksi,
             'tipe' => $tipe,
             'tabel' => $tabel
         ];
    }

    public static function flash()
    {
        if( isset($_SESSION['flash']) ) {
            echo '<div class="alert alert-' . $_SESSION['flash']['tipe'] . ' alert-dismissible fade show" role="alert">
                        Data ' . $_SESSION['flash']['tabel']. ' <strong>' . $_SESSION['flash']['pesan'] . '</strong> ' . $_SESSION['flash']['aksi'] . '
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">$times;</span>
                        </button>
                    </div>';
            unset($_SESSION['flash']);
        }
    }
}

?>