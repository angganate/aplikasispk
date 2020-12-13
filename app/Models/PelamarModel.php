<?php

namespace App\Models;

use CodeIgniter\Model;

class PelamarModel extends Model
{
    protected $table = 'tbpelamar';
    protected $allowedFields = ['nik_pelamar', 'nama_pelamar', 'email_pelamar', 'cv_pelamar'];

    public function getPelamar($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
