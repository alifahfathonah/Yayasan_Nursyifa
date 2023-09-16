<?php

namespace App\Models;

use CodeIgniter\Model;

class user extends Model{
    protected $table = 'user';
    protected $primarykey = 'id';
    protected $allowedFields = ['email','username', 'password', 'role'];
    protected $useTimeStamps = true;
    protected $useAutoincrement = true;
}