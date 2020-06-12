<?php

class Flasher{
    public static function setFlash($tipe,$judul,$pesan){
        $_SESSION["flash"] = [
            'tipe' => $tipe,
            'judul' => $judul,
            'pesan' => $pesan
        ];
    }

    public static function Flash(){
        if(isset($_SESSION["flash"])){
            echo '
            <div class="alert alert-'.$_SESSION["flash"]["tipe"].'" alert-dismissible fade show" role="alert">
            <strong>'.$_SESSION["flash"]["judul"].'</strong> '.$_SESSION["flash"]["pesan"].'
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
            ';
        }
        unset($_SESSION["flash"]);
    }
}