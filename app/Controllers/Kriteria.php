<?php

namespace App\Controllers;

use App\Models\KriteriaModel;

class Kriteria extends BaseController
{

    protected $kriteriaModel;
    public function __construct()
    {

        $this->kriteriaModel = new KriteriaModel();
    }
    public function index()
    {
        //$kriteria = $this->kriteriaModel->findAll();


        $data = [
            'title' => 'Daftar Kriteria',
            'kriteria' => $this->kriteriaModel->getKriteria()
        ];

        return view('kriteria/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form Tambah Kriteria',
            'validation' => \Config\Services::validation()
        ];

        return view('kriteria/create', $data);
    }

    public function save()
    {
        //validasi
        if (!$this->validate([
            'spk_kriteria' => 'required',
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/kriteria/create')->withInput()->with('validation', $validation);
        }

        $this->kriteriaModel->save([
            'spk_kriteria' => $this->request->getVar('spk_kriteria'),
            'nama_kriteria' => $this->request->getVar('nama_kriteria'),
            'sifat_kriteria' => $this->request->getVar('sifat_kriteria'),
            'bobot_kriteria' => $this->request->getVar('bobot_kriteria')
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambah');

        return redirect()->to('/kriteria');
    }

    public function delete($id)
    {

        $this->kriteriaModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to('/kriteria');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Form Ubah Kriteria',
            'validation' => \Config\Services::validation(),
            'kriteria' => $this->kriteriaModel->getKriteria($id)
        ];

        return view('kriteria/edit', $data);
    }

    public function update($id)
    {
        //validasi
        if (!$this->validate([
            'spk_kriteria' => 'required',
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/kriteria/edit/' . $this->request->getVar('id'))->withInput()->with('validation', $validation);
        }

        $this->kriteriaModel->save([
            'id' => $id,
            'spk_kriteria' => $this->request->getVar('spk_kriteria'),
            'nama_kriteria' => $this->request->getVar('nama_kriteria'),
            'sifat_kriteria' => $this->request->getVar('sifat_kriteria'),
            'bobot_kriteria' => $this->request->getVar('bobot_kriteria')
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Diubah');

        return redirect()->to('/kriteria');
    }
}
