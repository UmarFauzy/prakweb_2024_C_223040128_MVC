<?php 

class App {
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];
    
    public function __construct()
    {
        $url = $this->parseURL();
        
        // Pastikan $url[0] terdefinisi sebelum diakses
        if ($url && isset($url[0])) {
            //Controllers
            if ( file_exists('../app/Controllers/'. $url[0]. '.php') ) {
                $this->controller = $url[0];
                unset($url[0]);
            }
        }
        
        require_once '../app/Controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        //Method 
        if ($url && isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }
        
        //Params
        if ($url) {
            $this->params = array_values($url);
        }

        // Jalankan Controller dan Method, serta kirimkan params jika ada
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseURL()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
        return []; // Tambahkan return array kosong jika tidak ada 'url'
    }
}

?>
