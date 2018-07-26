<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function index()
    {
        return view('admin.list_anggota');
    }
    public function formAnggota()
    {
        return view('admin.form_anggota');
    }
}
