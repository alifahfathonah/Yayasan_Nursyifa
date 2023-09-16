<?php

namespace App\Controllers;
use App\Models\data_model;
use App\Models\data_edit;


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
    
        $data = [
            'title' => 'Daftar Aduan',
            'tampil' => $tampil
        ];
    
        return view('dashboard', $data);
    }

    public function upload(): string{
        return view('upload');
    }



}