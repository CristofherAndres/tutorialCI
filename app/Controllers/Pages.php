<?php namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        echo view('templates/header');
        echo view('holaMundo');
        echo view('templates/footer');
    }

    public function chao(){
        echo view('templates/header');
        echo view('chaoMundo');
        echo view('templates/footer');

    }
}
