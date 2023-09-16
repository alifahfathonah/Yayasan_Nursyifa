<?php

namespace App\Models;

use CodeIgniter\Model;

class data_upload extends Model{
    protected $table = 'content';
    protected $primarykey = 'id';
    protected $allowedFields = ['judul','deskripsi', 'gambar'];
    protected $useTimeStamps = true;
    protected $useAutoincrement = true;
}