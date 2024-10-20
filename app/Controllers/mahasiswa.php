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
}

?>
