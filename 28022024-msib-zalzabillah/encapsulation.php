<?php
class Food
{
    //  properties kelas food
    public $nama;

    protected $jenis;

    // methods set properties
    function __construct($nama, $jenis)
    {
        $this->nama = $nama;
        $this->jenis = $jenis;
    }

    // methods set menentukan harga dari jenis roti yang dipilih 
    protected function JenisRoti () {
        if ($this->jenis = 'stroberi') {
            $harga = 5000;
        }
        else if ($this->jenis = 'coklat'){
            $harga = 10000;
        }
        return $harga;
    }

    // Membuat Method Untuk Memanggil Property protected ($jenis)

    function BacaJenis()
    {
        return $this->jenis;
    }
}

/**

* Class Turunan Food dengan nama class Jenis

*/

class Jenis extends Food
{
    // propertis kelas jenis
    public $harga;

    // methods set harga untuk menampilkan harga sesuai jenis roti yang dipilih

    function BacaHarga()
    {
        $this->harga = $this->JenisRoti();

        return $this->harga;
    }
}

// membuat objek makanan
$makanan = new Jenis('roti', 'stroberi');

// mencetak data makanan
echo "Nama Makanan : ".$makanan->nama."<br />";

echo "Rasa : ".$makanan->BacaJenis()."<br />";

echo "Harga : ".$makanan->BacaHarga()."<br />";
?> 