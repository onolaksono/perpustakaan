<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        return view('admin.list_buku');
    }

    public function formBuku()
    {
        return view('admin.form_buku');
    }
}
