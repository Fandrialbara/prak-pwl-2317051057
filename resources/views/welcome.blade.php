@extends('layouts.app')

@section('content')
    <h1 style="text-align:center; color:#444;">Form Tambah Pengguna</h1>

    <div style="max-width: 500px; margin: 20px auto; padding: 20px; background: #fff; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
        <form action="{{ route('user.store') }}" method="POST">
            @csrf

            <div style="margin-bottom: 15px;">
                <label for="nama" style="display:block; font-weight:bold; margin-bottom:5px;">Nama</label>
                <input type="text" name="nama" id="nama" required
                       style="width:100%; padding:10px; border:1px solid #ccc; border-radius:5px;">
            </div>

            <div style="margin-bottom: 15px;">
                <label for="nim" style="display:block; font-weight:bold; margin-bottom:5px;">NPM</label>
                <input type="text" name="nim" id="nim" required
                       style="width:100%; padding:10px; border:1px solid #ccc; border-radius:5px;">
            </div>

            <div style="margin-bottom: 15px;">
                <label for="nama_kelas" style="display:block; font-weight:bold; margin-bottom:5px;">Kelas</label>
                <input type="text" name="nama_kelas" id="nama_kelas" required
                       style="width:100%; padding:10px; border:1px solid #ccc; border-radius:5px;">
            </div>

            <button type="submit"
                    style="background:#4CAF50; color:white; padding:10px 20px; border:none; border-radius:5px; cursor:pointer;">
                Simpan
            </button>
           
        </form>
    </div>
@endsection