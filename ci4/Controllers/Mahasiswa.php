<?php

namespace App\Controllers;
use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    protected $mhsModel;

    public function __construct()
    {
        $this->mhsModel = new MahasiswaModel();
    }

    public function index()
    {
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $data['mahasiswa'] = $this->mhsModel->like('nama', $keyword)->findAll();
        } else {
            $data['mahasiswa'] = $this->mhsModel->findAll();
        }

        return view('mahasiswa/index', $data);
    }

    public function create()
    {
        return view('mahasiswa/create');
    }

    public function store()
    {
        $this->mhsModel->save([
            'nama' => $this->request->getPost('nama'),
            'nim' => $this->request->getPost('nim'),
            'jurusan' => $this->request->getPost('jurusan'),
        ]);

        return redirect()->to('/mahasiswa');
    }

    public function edit($id)
    {
        $data['mhs'] = $this->mhsModel->find($id);
        return view('mahasiswa/edit', $data);
    }

    public function update($id)
    {
        $this->mhsModel->update($id, [
            'nama' => $this->request->getPost('nama'),
            'nim' => $this->request->getPost('nim'),
            'jurusan' => $this->request->getPost('jurusan'),
        ]);

        return redirect()->to('/mahasiswa');
    }

    public function delete($id)
    {
        $this->mhsModel->delete($id);
        return redirect()->to('/mahasiswa');
    }

    public function detail($id)
    {
        $data['mhs'] = $this->mhsModel->find($id);
        return view('mahasiswa/detail', $data);
    }
}
