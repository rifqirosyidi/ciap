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

        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About | Learn Ci'
        ];

        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact | Learn Ci',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jl. Abc 123',
                    'kota' => 'Malang'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => "Jl. Xyz 123",
                    'kota' => 'Surabaya'

                ]
            ]
        ];

        return view('pages/contact', $data);
    }
}
