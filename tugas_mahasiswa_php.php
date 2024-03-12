<?php
    // Interface untuk Dosen
    interface Consultable {
        function consult();
    }

    // Base Class / parent class untuk Person
    class Person {
        protected $name; // properti kelas person
        
        // methode properti kelas properti
        function __construct($name) {
            $this->name = $name;
        }

        // metode mengambil properti nama
        function getName() {
            return $this->name;
        }
    }

    // Class Mahasiswa yang merupakan turunan dari Person dan implementasi Consultable
    class Mahasiswa extends Person implements Consultable {
       
        // properti kelas mahasiswa
        private $nim;
        private $krs;

        // metode set properti
        function __construct($name, $nim, $krs) {
            parent::__construct($name);
            $this->nim = $nim;
            $this->krs = $krs; 
        }
        
        // metode get fungsi consult dari interface kelas consultable
        function consult() {
            return "Mahasiswa ". $this->name . " nim " .$this->nim . " dengan nilai krs " . $this->krs;
        }

        // metode nilai krs
        function NilaiKRS() {
            if ($this->krs > 75) {
                $status = "tidak konsultasi";
            }
            else {
                $status = "harus konsultasi";
            }
            return $status;
            }
    }    
    
    // Class Dosen yang merupakan turunan dari Person
    class Dosen extends Person {
        private $nidn;

        public function __construct($name, $nidn) {
            parent::__construct($name);
            $this->nidn = $nidn;
        }

        public function getNIDN() {
            return $this->nidn;
        }
    }

    class Kampus {
        private $nama;
        private $alamat;

        public function __construct($nama, $alamat) {
            $this->nama = $nama;
            $this->alamat = $alamat;
        }

        public function getKampus() {
            return "Tempat : " . $this->nama . ", " . $this->alamat;
        }
    }



    $mahasiwa = new Mahasiswa ("zalzabillah", "19200400", 70);
    $dosen = new Dosen("Bpk Bedu Sanjaya S.kom", "0045389011");
    $kampus = new Kampus("Universitas Bina Sarana Informatika", "Cabang Slipi");

    echo $mahasiwa->consult() . " ";
    echo $mahasiwa->NilaiKRS() . " dengan dosen pembimbing. <br> <br>";
    echo "Dosen : " . $dosen->getName() . " (" . $dosen->getNIDN() . ") <br>";
    echo $kampus->getKampus();
    ?>