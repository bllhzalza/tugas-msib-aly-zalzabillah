<?php

class data_siswa extends controller {
    public function index () {
        $data['judul'] = "Data Siswa";
        $data['data_siswa'] = $this->model("siswa_model")->getAllSiswa();
        $this->view('templates/header', $data);
        $this->view('data_siswa/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id) {
        $data['judul'] = "Detail Siswa";
        $data['data_siswa'] = $this->model("siswa_model")->getSiswaById($id);
        $this->view('templates/header', $data);
        $this->view('data_siswa/detail', $data);
        $this->view('templates/footer');  
    }
    public function edit($id) {
        $data['judul'] = "Edit Siswa";
        $data['data_siswa'] = $this->model("siswa_model")->getSiswaById($id);
        $this->view('templates/header', $data);
        $this->view('data_siswa/edit', $data);
        $this->view('templates/footer');  
    }

    public function update()
    {
        $_POST['id'];
        if($this->model('siswa_model')->updateSiswa($_POST) > 0) {
            flasher::setFlash('berhasil', 'diupdate', 'success');
            header('Location: ' . BASE_URL . '/data_siswa');
            exit;
         }
         else {
            flasher::setFlash('gagal', 'diupdate', 'danger');   
            header('Location: ' . BASE_URL . '/data_siswa');
            exit;
         }
        }

    public function tambah() {
        if($this->model('siswa_model')->buatSiswa($_POST) > 0) {
            flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASE_URL . '/data_siswa');
            exit;
         }
         else {
            flasher::setFlash('gagal', 'ditambahkan', 'danger');   
            header('Location: ' . BASE_URL . '/data_siswa');
            exit;
         }
     }

     public function hapus($id) {
        if($this->model('siswa_model')->hapusSiswa($id) > 0) {
            flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASE_URL . '/data_siswa');
            exit;
         }
         else {
            flasher::setFlash('gagal', 'dihapus', 'danger');   
            header('Location: ' . BASE_URL . '/data_siswa');
            exit;
         }
     }

}

?>