<?php

include "index.html";

class buah
{
    var $totalMangga, $totalJambu, $totalSalak;
   
    public function __construct($mangga, $jambu, $salak){
        $this->mangga = $mangga;
        $this->jambu = $jambu;
        $this->salak = $salak;
    }

    public function getMangga(){
        $this->totalMangga = $this->mangga * 15000;
        echo "<p>Harga Mangga : Rp ".$this->totalMangga;
    }

    public function getJambu(){
        $this->totalJambu = $this->jambu * 13000;
        echo "<br><p>Harga Jambu : Rp ".$this->totalJambu;
    }

    public function getSalak(){
        $this->totalSalak = $this->salak * 10000;
        echo "<br><p>Harga Salak : Rp ".$this->totalSalak;
    }

    public function total(){
        $total = $this->totalMangga + $this->totalJambu + $this->totalSalak;
        echo "<br><h4>Total Harga : Rp ". $total;
    }
}

$mangga = $_POST["mangga"];
$jambu = $_POST["jambu"];
$salak = $_POST["salak"];
echo "<br><br><div >
       <header><h2>NOTA</h2></header>
   </div>";
$transaksi = new buah($mangga, $jambu, $salak);
$transaksi->getMangga();
$transaksi->getJambu();
$transaksi->getSalak();
$transaksi->total();
?>