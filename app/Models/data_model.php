<?php

namespace App\Models;

use CodeIgniter\Model;

class data_model extends Model
{
    protected $table = "content";
    protected $useTimestamps = true;
    protected $useAutoIncrement = true;
    protected $primaryKey = 'id';
    protected $createdField = 'create_at';
    protected $updatedField = 'update_at';
    protected $dataFormat = 'datetime';
    protected $allowedFields = ['id', 'judul', 'deskripsi', 'gambar'];

    public function getAduan($id)
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

    public function getGambar()
    {
        return $this->findAll();
    }
    
    public function simpan_gambar($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    function search($keyword)
    {
        return $this->table('content')->like('judul', $keyword);
    }

    

    function Content($userId)
    {
        return $this->where('id', $userId)
            ->findAll();
    }
}