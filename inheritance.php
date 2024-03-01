<?php
class Food {

  // propertis kelas food
  public $nama;
  public $jenis;
  
  // methods set properties
  function __construct($data) {
    $this->nama = $data["nama"];
    $this->jenis = $data["jenis"];
  }
}

// roti adalah kelas anak mewarisi food
class Harga extends Food {

  // propertis kelas harga
  public $harga;

  // methods set properties
  function set_harga($harga) {
    $this->harga = $harga;
  }

  function get_harga () {
    return $this->harga;
}
}
// membuat objek roti
$roti = new Harga(array(
    "nama"=>"roti",
    "jenis"=>"stroberi"
));

// set properties kelas Harga
$roti->set_harga(5000);

// cetak data properties
echo "ini adalah {$roti->nama} {$roti->jenis} seharga {$roti->get_harga()}.";
?>
