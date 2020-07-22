<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {

        $data = [
            'title' => 'Home | Learn Ci',
            'angka' => ['Satu', 'Dua ', 3, 4, 5,]
        ];

        echo view('layout/header', $data);
        echo view('pages/home');
        echo view('layout/footer');
    }

    public function about()
    {
        $data = [
            'title' => 'About | Learn Ci'
        ];
        echo view('layout/header', $data);
        echo view('pages/about');
        echo view('layout/footer');
    }
}
