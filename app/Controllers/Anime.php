<?php

namespace App\Controllers;

use App\Models\AnimeModel;

class Anime extends BaseController
{

    protected $animeModel;

    public function __construct()
    {
        $this->animeModel = new AnimeModel();
    }

    public function index()
    {

        // Connect to db without model
        // $db = \Config\Database::connect();
        // $anime = $db->query("SELECT * FROM anime");
        // foreach ($anime->getResultArray() as $an) {
        //     d($an);
        // }

        // Connect With Models
        // $anime = new AnimeModel();    // not using construct so if you need this you have to redefine in other method

        $all_anime = $this->animeModel->findAll();

        $data = [
            'title' => 'Anime List',
            'all_anime' => $all_anime
        ];

        return view('anime/index', $data);
    }
}
