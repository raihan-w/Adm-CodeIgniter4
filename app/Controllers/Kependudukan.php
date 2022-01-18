<?php

namespace App\Controllers;

class Kependudukan extends BaseController
{
    public function desa()
    {
        return view('penduduk/warga_desa');
    }
    public function wna()
    {
        return view('penduduk/warga_asing');
    }
}
