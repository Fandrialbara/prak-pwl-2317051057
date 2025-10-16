<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\UserModel;

class UserController extends Controller
{
    public $userModel;
    public $kelasModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }

    // ======================================================
    // ===============        READ (INDEX)       ============
    // ======================================================
    public function index()
    {
        $data = [
            'title' => 'List User',
            'user' => $this->userModel->getUser(), // menampilkan semua user
        ];
        return view('list_user', $data);
    }

    // ======================================================
    // ===============       CREATE (FORM)       ============
    // ======================================================
    public function create()
    {
        $kelas = $this->kelasModel->getKelas();
        $data = [
            'title' => 'Create User',
            'kelas' => $kelas,
        ];
        return view('create_user', $data);
    }

    // ======================================================
    // ===============       STORE (SAVE)        ============
    // ======================================================
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'npm' => 'required|string|max:255',
            'kelas_id' => 'required|integer',
        ]);

        $this->userModel->create([
            'nama' => $request->input('nama'),
            'npm' => $request->input('npm'),
            'kelas_id' => $request->input('kelas_id'),
        ]);

        return redirect()->to('/user')->with('success', 'User berhasil ditambahkan.');
    }

    // ======================================================
    // ===============       EDIT (FORM)         ============
    // ======================================================
    public function edit($id)
    {
        $user = $this->userModel->find($id);
        $kelas = $this->kelasModel->getKelas();

        if (!$user) {
            return redirect()->route('user.index')->with('error', 'User tidak ditemukan.');
        }

        $data = [
            'title' => 'Edit User',
            'user' => $user,
            'kelas' => $kelas,
        ];

        return view('edit_user', $data);
    }

    // ======================================================
    // ===============      UPDATE (SAVE)        ============
    // ======================================================
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'npm' => 'required|string|max:255',
            'kelas_id' => 'required|integer',
        ]);

        $user = $this->userModel->find($id);

        if (!$user) {
            return redirect()->route('user.index')->with('error', 'User tidak ditemukan.');
        }

        $user->update([
            'nama' => $request->input('nama'),
            'npm' => $request->input('npm'),
            'kelas_id' => $request->input('kelas_id'),
        ]);

        return redirect()->route('user.index')->with('success', 'Data user berhasil diperbarui.');
    }

    // ======================================================
    // ===============       DELETE (DESTROY)    ============
    // ======================================================
    public function destroy($id)
    {
        $user = $this->userModel->find($id);

        if ($user) {
            $user->delete();
            return redirect()->route('user.index')->with('success', 'User berhasil dihapus.');
        }

        return redirect()->route('user.index')->with('error', 'User tidak ditemukan.');
    }
}
