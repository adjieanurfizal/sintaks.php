<?php

namespace App\Controllers;

class loop extends BaseController{
    public function looping()
    {
        $data = [
            ['nama' => 'Adjie', 'nim' => '12345'],
            ['nama' => 'Ali', 'nim' => '12346'],
            ['nama' => 'Nur', 'nim' => '12347'],
        ];

        $html = "<table border='1'><tr><th>Nama</th><th>NIM</th></tr>";
        foreach ($data as $mhs) {
            $html .= "<tr><td>{$mhs['nama']}</td><td>{$mhs['nim']}</td></tr>";
        }
        $html .= "</table>";

        return $html;
    }
}