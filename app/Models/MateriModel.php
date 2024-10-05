<?php

namespace App\Models;

use CodeIgniter\Model;

class MateriModel extends Model
{
    protected $table            = 'tb_materi';
    protected $primaryKey       = 'id_materi';
    protected $allowedFields    = ['id_materi', 'judul_materi', 'des_materi', 'sumber'];

    // Dates
    protected $useTimestamps = true;

    // select all data Materi
    public function selectAllData($id_materi = false)
    {

        if ($id_materi == false) {

            return $this->findAll();
        }

        return $this->where(['id_materi' => $id_materi])->first();
    }

    // save data materi
    public function saveData($data)
    {

        return $this->save($data);
    }
}
