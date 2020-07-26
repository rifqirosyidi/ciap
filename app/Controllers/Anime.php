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

        // $all_anime = $this->animeModel->findAll();

        $all_anime = $this->animeModel->getAnime();
        $data = [
            'title' => 'Anime List',
            'all_anime' => $all_anime
        ];

        return view('anime/index', $data);
    }

    public function detail($slug)
    {
        // $detail_anime = $this->animeModel->where(['slug' => $slug])->first();
        $detail_anime = $this->animeModel->getAnime($slug);

        $data = [
            'title' => 'Detail Anime',
            'anime' => $detail_anime
        ];

        if (empty($detail_anime)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("$slug not found");
        }

        return view('anime/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Add Anime',
            'validation' => \Config\Services::validation()
        ];

        return view('anime/create', $data);
    }

    public function save()
    {

        // Validasi
        if (!$this->validate([
            // 'judul' => 'required|is_unique[anime.judul]',

            // custom message
            'judul' => [
                'rules' => 'required|is_unique[anime.judul]',
                'errors' => [
                    'required' => '{field} anime harus diisi.',
                    'is_valid' => '{field} anime sudah terdaftar.'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/anime/create')->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('judul'), '-', true);

        $this->animeModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $this->request->getVar('sampul')
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Di Simpan');

        return redirect()->to('/anime');
    }
}
