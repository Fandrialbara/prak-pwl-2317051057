<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\Usermodel;


class UserController extends Controller
{
    public $userModel;
    public $kelasModel;
    public function __construct(){
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }
    public function create(){
        $kelasModel = new Kelas();
        $kelas = $kelasModel->getKelas();
        $data = [
            'title' => 'Create User',
            'kelas' => $kelas
        ];

        return view('create_user', $data);
    }

    public function index(){
        $data = [
            'title' => 'List User',
            'users' => $this->userModel->getUser(),
        ];
    }
}