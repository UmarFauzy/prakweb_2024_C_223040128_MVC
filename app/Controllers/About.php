<?php 

class About {
    public function index($nama = 'Umar', $pekerjaan = 'Mahasiswa') 
    {
        echo "Hall, Nama saya $nama, saya adalah seorang $pekerjaan";
    }

    public function page() 
    {
        echo 'About/page';
    }
}




?>