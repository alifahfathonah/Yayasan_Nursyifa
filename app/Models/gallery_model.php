<?php

namespace App\Models;

use CodeIgniter\Model;

class gallery_model extends Model
{
    protected $table = "content";
    protected $useTimestamps = true;
    protected $useAutoIncrement = true;
    protected $primaryKey = 'id';
    protected $createdField = 'create_at';
    protected $updatedField = 'update_at';
    protected $dataFormat = 'datetime';
    protected $allowedFields = ['id', 'judul', 'deskripsi', 'gambar'];

    public function getImageByID($id)
    {
        return $this->find($id);
    }
}
