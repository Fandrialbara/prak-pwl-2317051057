<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matakuliah;

class MataKuliahController extends Controller
{
    // d. Menampilkan daftar mata kuliah
    public function index()
    {
        $data = [
            'title' => 'List Mata Kuliah',
            'mks' => Matakuliah::all(),
        ];

        return view('list_mk', $data);
    }

    // e. Menampilkan form input mata kuliah baru
    public function create()
    {
        return view('create_mk', ['title' => 'Create Mata Kuliah']);
    }

    // f. Menyimpan data mata kuliah baru
    public function store(Request $request)
    {
        Matakuliah::create([
            'nama_mk' => $request->input('nama_mk'),
            'sks' => $request->input('sks'),
        ]);

        return redirect()->to('/matakuliah');
    }
}
