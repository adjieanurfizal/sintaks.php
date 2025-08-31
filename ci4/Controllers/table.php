<?php

namespace App\Controllers;

class table extends BaseController{
    public function table()
    {
        return "
        <table border='1'>
            <tr><th>Nama</th><th>NIM</th></tr>
            <tr><td>Adjie</td><td>12345</td></tr>
            <tr><td>Ali</td><td>67890</td></tr>
        </table>";
    }
}