<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index()
    {
        echo "Ini Controller Coba";
    }

    public function about($nama = '', $umur = 0)
    {
        // $this->nama get data from parent controller
        echo "Coba $this->nama ";

        // Get data from url segment /coba/about/$nama/$umur
        echo "About Params is $nama umur saya $umur tahun";
    }

    //--------------------------------------------------------------------

}
