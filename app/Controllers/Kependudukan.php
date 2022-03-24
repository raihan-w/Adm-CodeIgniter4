<?php

namespace App\Controllers;

class Kependudukan extends BaseController
{
    public function lokal()
    {
        return view('penduduk/lokal');
    }
    public function asing()
    {
        return view('penduduk/asing');
    }
}
