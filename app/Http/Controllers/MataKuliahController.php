<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataKuliah;

class MataKuliahController extends Controller
{
    public function index(){
        $data = [
            'title' => 'Mata Kuliah',
            'mks' => MataKuliah::all(),
        ];
        return view('list_mk', $data);
    }

    public function create(){
        return view('create_mk', ['title' => 'Create Mata Kuliah']);
    }

    public function store(Request $request){
        MataKuliah::create([
            'nama_mk' => $request->input('nama_mk'),
            'sks' => $request->input('sks'),
        ]);
        return redirect()->to('/mata-kuliah');
    }

    public function edit($id){
        $mk = MataKuliah::findorFail($id);
        return view('edit_mk', ['title' => 'EDIT MATA KULIAH', 'mk' => $mk]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'nama_mk' => 'required',
            'sks' => 'required|integer|min:1|max:6',
        ]);

        $mk = MataKuliah::findorFail($id);
        $mk->update([
             'nama_mk' => $request->input('nama_mk'),
             'sks' => $request->input('sks'),
        ]);
    }

    public function destroy($id){
        $mk = MataKuliah::findorFail($id);
        $mk->delete();

        return redirect()->to('/mata-kuliah')->with('success', 'Data Berhasil Dihapus');
    }
}