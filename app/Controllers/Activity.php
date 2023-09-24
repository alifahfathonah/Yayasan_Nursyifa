<?php

namespace App\Controllers;

use App\Models\data_edit;
use App\Models\gallery_model;

class Activity extends BaseController
{
    protected $data_edit;
    protected $gallery_model;

    public function __construct()
    {
        $this->data_edit = new data_edit(); // Inisialisasi model di dalam constructor
    }

    public function activity_content($id)
    {
        $data = [
            'title' => 'Activity Home',
            'tampil' => $this->data_edit->getEdit($id)
        ];
        return view('activity', $data);
    }

    public function getImage($id)
    {
        $gallery_model = new gallery_model();
        $imageData = $gallery_model->getImageByID($id);

        // Kirim data gambar dalam format JSON
        return $this->response->setJSON(['image_data' => $imageData]);
    }
}