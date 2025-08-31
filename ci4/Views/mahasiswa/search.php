<?php

namespace App\Views\mahasiswa;

public function search()
{
    $keyword = $this->request->getVar('keyword');
    $model = new MahasiswaModel();
    $data['mahasiswa'] = $model->like('nama', $keyword)->findAll();

    return view('mahasiswa/index', $data);
}
