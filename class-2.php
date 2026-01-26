<?php
class Mahsulotlar {
    public $nomi;
    public $kirim_narxi;
    public $sotuv_narxi;
    public $birligi;
    public function __constrruct($nomi,$kirim_narxi) {
        $this->nomi = $nomi;
        $this->kirim_narxi = $kirim_narxi;
    }
    public function setbirligi($birligi) {
        $this->birligi = $birligi;
    }
    public function getbirligi() {
        return $this->birligi;
    }
    public function info() {
        echo "Bu mahsulotlar classi!";
    }
}

$snikers = new Mahsulotlar("Snikers",9000);
?>