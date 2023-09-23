<?php

namespace App\Controllers;

use App\Models\data_edit;

class Activity extends BaseController
{
    protected $data_edit;

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
    } //baru

    public function about()
    {
        return view('about');
    }
}
