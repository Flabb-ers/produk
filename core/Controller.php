<?php
class Controller
{
    public function view($view, $data = [])
    {
        extract($data); // Mengubah array menjadi variabel
        require_once '../app/views/' . $view . '.php';
    }
}
