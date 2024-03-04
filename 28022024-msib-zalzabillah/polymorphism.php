<?php 
  interface BangunRuang{
    public function HitungVolume();
  }


  // kelas balok implementasi dari interface BangunRuang
  class Balok implements BangunRuang{

    // propertis kelas balok
    private $tinggi;
    private $panjang;
    private $lebar;

    // methods komponen balok
    public function __construct($tinggi,$panjang,$lebar){
      $this->tinggi = $tinggi;
      $this->panjang = $panjang;
      $this->lebar = $lebar;
    }

    // methods implementasi dari BangunRuang untuk rumus volume balok
    public function HitungVolume(){
      return ($this->tinggi * $this->panjang * $this->lebar);
    }
  }
  
  // kelas tabung implementasi dari interface BangunRuang
  class Tabung implements BangunRuang{

    // propertis kelas tabung
    private $jarijari = 7;
    private $tinggi;

    // methods komponen tabung
    public function __construct($jarijari,$tinggi){
      $this->jarijari = $jarijari;
      $this->tinggi = $tinggi;
    }

    // methods implementasi dari BangunRuang untuk rumus volume tabung
    public function HitungVolume(){
      return (3.14 * pow($this->jarijari,2) * $this->tinggi);
    }
  }

  $balok = new Balok(4,8,4); // membuat objek balok
  echo 'Volume Balok = '.$balok->hitungVolume() . "<br>";  // cetak properties hasil dari perhitungan volume

  $tabung = new Tabung(7,28);
  echo 'Volume Tabung = '.$tabung->hitungVolume() . "<br>"; 
