<?php

namespace App\Controllers;

use App\Models\PenilaianModel;

class Penilaian extends BaseController
{

    protected $penilaianModel;
    public function __construct()
    {

        $this->penilaianModel = new PenilaianModel();
    }
    public function index()
    {

        $data = [
            'title' => 'Perhitungan',
            'penilaian' => $this->penilaianModel->getPenilaian()
        ];

        return view('penilaian/index', $data);
    }
}
