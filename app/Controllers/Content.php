<?php

namespace App\Controllers;

use App\Models\data_model;
use App\Models\data_upload;
use App\Models\data_edit;


class Content extends BaseController{

    protected $data_model;
    protected $data_edit;
    public function __construct()
    {
        $this->data_edit = new data_edit(); // Inisialisasi model di dalam constructor
    }
    
    public function Tampil()
    {
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $tampil = $this->data_model->search($keyword);
        } else {
            $tampil = $this->data_model;
        }

        $data = [
            'title' => 'Daftar Aduan',
            'tampil' => $tampil->paginate(5, 'tampil'),
            'pager' => $this->data_model->pager,

        ];

        $userId = session()->get('id'); // Pastikan Anda memanggil session dengan benar
        $data_model = new data_model();
        $Tampil_Model = $data_model->Content($userId);

        echo view('pages/dashboard',  ['Tampil_Model' => $Tampil_Model], $data);
    }

    protected $data_upload;

    public function Upload(){
        $data_upload = new data_upload();
        $file = $this->request->getFile('gambar'); // Ambil file yang diunggah
        $file->move('assets/images'); // Pindahkan file ke direktori uploads
        $data = [
            'gambar' => $file->getName(),
            'judul' => $this->request->getVar('judul'),
            'deskripsi' => $this->request->getVar('deskripsi'),
        ];
        $data_upload->insert($data); // Simpan informasi file ke database
        return redirect()->to('upload');
    }

    public function Edit(){
        $data_edit = new data_edit();
        $file = $this->request->getFile('gambar'); // Ambil file yang diunggah
        $data = [
            'gambar' => $file->getName(),
            'judul' => $this->request->getVar('judul'),
            'deskripsi' => $this->request->getVar('deskripsi'),
        ];
        $data_edit->update($data); // Simpan informasi file ke database
        return redirect()->to('upload');
    }

    public function edit_content($id)
    {
        $data = [
            'title' => 'Edit Home',
            'validation' => \Config\Services::validation(),
            'tampil' => $this->data_edit->getEdit($id)
        ];
        return view('edit', $data);
    }

    public function delete_content($id){
        $data_edit = new data_edit();
        $data_edit->where('id', $id);
        $data_edit->delete();
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to(site_url('dashboard'));
    }

    public function update_edit($id)
    {
        if (!$this->validate([
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Isi Keluhan Tidak boleh kosong'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Tidak boleh kosong'
                ]
            ]
        ])) {

            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $berkas = new data_edit();
        $dataBerkas = $this->request->getFile('gambar');

        // Cek apakah ada berkas yang diunggah dan valid
        if ($dataBerkas && $dataBerkas->isValid()) {
            $fileName = $dataBerkas->getName();
            $dataBerkas->move('assets/images', $fileName);
        } else {
            $currentAduan = $berkas->find($id); // Ambil data aduan yang akan diupdate
            $fileName = $currentAduan['gambar']; // Gunakan gambar yang sudah ada
        }

        $berkas->update($id, [
            'gambar' => $fileName,
            'judul' => $this->request->getPost('judul'),
            'deskripsi' => $this->request->getPost('deskripsi')
        ]);

        session()->setFlashdata('pesan', 'Data Aduan Berhasil diubah');
        return redirect()->to(base_url('dashboard'));
    }
}


?>