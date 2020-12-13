<?php

namespace App\Controllers;

use App\Models\PelamarModel;

class Lamaran extends BaseController
{

    protected $pelamarModel;
    public function __construct()
    {

        $this->pelamarModel = new PelamarModel();
    }
    public function index()
    {
        //$kriteria = $this->kriteriaModel->findAll();


        $data = [
            'title' => 'Daftar Pelamar',
            'pelamar' => $this->pelamarModel->getPelamar()
        ];

        return view('pelamar/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Formulir Pendaftaran',
            'validation' => \Config\Services::validation()
        ];

        return view('pelamar/create', $data);
    }

    public function save()
    {
        //validasi
        if (!$this->validate([
            'nik_pelamar' => 'required',
            'cv_pelamar' => [
                'rules' => 'uploaded[cv_pelamar]|ext_in[cv_pelamar,rar,zip]',
                'errors' => [
                    'ext_in' => 'Bukan RAR!!!'
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/pelamar/create')->withInput()->with('validation', $validation);
            return redirect()->to('/')->withInput();
        }

        //ambil file
        $fileCv = $this->request->getFile('cv_pelamar');

        //generet nama rendom
        $namaCv = $fileCv->getRandomName();

        //pindahkan file ke folder slur
        $fileCv->move('file', $namaCv);



        $this->pelamarModel->save([
            'nik_pelamar' => $this->request->getVar('nik_pelamar'),
            'nama_pelamar' => $this->request->getVar('nama_pelamar'),
            'email_pelamar' => $this->request->getVar('email_pelamar'),
            'cv_pelamar' => $namaCv
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambah');

        return redirect()->to('/');
    }
}
