<?php

namespace App\Controllers;

use App\Models\data_model;

class Home extends BaseController
{
    protected $data_model;

    public function __construct()
    {
        $this->data_model = new data_model();
    }

    public function utama(): string
    {
        // Mengambil data menggunakan metode findAll()
        $tampil = $this->data_model->findAll();
        $data = [
                'title' => 'Daftar Aduan',
                'tampil' => $tampil
            ];
        return view('home', $data);
    }

    public function dashboard()
    {
        // Inisialisasi model data_model
        $data_model = new \App\Models\data_model(); // Sesuaikan dengan namespace dan nama model Anda

        // Mengambil data menggunakan metode findAll()
        $tampil = $data_model->findAll();


        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $tampil = $this->data_model->search($keyword);
        } else {
            $tampil = $this->data_model;
        }

        $data = [
            'title' => 'Tampil Dashboard',
            'tampil' => $tampil->paginate(
                3,
                'tampil'
            ),
            'pager' => $this->data_model->pager,
        ];

        return view('dashboard', $data);
    }
}