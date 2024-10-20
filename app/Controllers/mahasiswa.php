<?php 

class mahasiswa extends Controller {
    public function index()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('mahasiswa_model')->getAllMahasiswa();
        $this->view('templates/header', $data); // Menambahkan $data
        $this->view('mahasiswa/index', $data);  // Menambahkan $data
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Mahasiswa';
        $data['mhs'] = $this->model('mahasiswa_model')->getMahasiswaById($id);
        $this->view('templates/header', $data); // Menambahkan $data
        $this->view('mahasiswa/detail', $data);  // Menambahkan $data
        $this->view('templates/footer');
    }
}

?>
