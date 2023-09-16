<?php

namespace App\Models;

use CodeIgniter\Model;

class data_edit extends Model{
    protected $table = 'content';
    protected $primarykey = 'id';
    protected $allowedFields = ['judul','deskripsi', 'gambar'];
    protected $useTimeStamps = true;
    protected $useAutoincrement = true;
    protected $createdField = 'create_at';
    protected $updatedField= 'update_at';
    protected $dataFormat = 'datetime';

    public function getEdit($id)
    {
        // pembuatan query
        $sql = "SELECT * FROM content WHERE id='$id'";
        // Eksekusi query
        $query = $this->db->query($sql);
        // uraikan hasil kueri dalam bentuk array
        $data = $query->getResultArray();
        // Kembalikan hasil kueri ke kontroller
        return $data;
    }
}