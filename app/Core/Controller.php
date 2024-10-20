<?php 

class Controller {
    public function view($view, $data = []) 
    {
        require '../app/views/' . $view . '.php';
    }

    public function model($model) 
    {
        require '../app/Models/' . $model . '.php'; // Perbaikan path di sini
        return new $model;
    }
}

?>
