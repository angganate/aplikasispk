<?php

namespace App\Models;

use CodeIgniter\Model;

class KriteriaModel extends Model
{
    protected $table = 'tbkriteria';
    protected $allowedFields = ['spk_kriteria', 'nama_kriteria', 'sifat_kriteria', 'bobot_kriteria'];

    public function getKriteria($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
