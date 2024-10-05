<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'tb_user';
    protected $primaryKey       = 'id_user';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['id_user', 'nama_user', 'username', 'password'];
    // Dates
    protected $useTimestamps = true;


    // select all user
    public function selectAllUser($username = false)
    {

        return $this->where(['username' => $username])->first();
    }
}
