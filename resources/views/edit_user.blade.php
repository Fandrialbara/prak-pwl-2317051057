@extends('layouts.app')

@section('content')
    <h1 style="text-align:center; color:#444;">Edit Data Pengguna</h1>

    <div style="max-width: 500px; margin: 20px auto; padding: 20px; background: #fff; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
        <form action="{{ route('user.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div style="margin-bottom: 15px;">
                <label for="nama" style="display:block; font-weight:bold; margin-bottom:5px;">Nama</label>
                <input type="text" name="nama" id="nama" value="{{ old('nama', $user->nama) }}" required
                       style="width:100%; padding:10px; border:1px solid #ccc; border-radius:5px;">
            </div>

            <div style="margin-bottom: 15px;">
                <label for="npm" style="display:block; font-weight:bold; margin-bottom:5px;">NPM</label>
                <input type="text" name="npm" id="npm" value="{{ old('npm', $user->npm) }}" required
                       style="width:100%; padding:10px; border:1px solid #ccc; border-radius:5px;">
            </div>

            <div style="margin-bottom: 15px;">
                <label for="kelas_id" style="display:block; font-weight:bold; margin-bottom:5px;">Kelas</label>
                <select name="kelas_id" id="kelas_id" required
                        style="width:100%; padding:10px; border:1px solid #ccc; border-radius:5px;">
                    <option value="">-- Pilih Kelas --</option>
                    @foreach ($kelas as $k)
                        <option value="{{ $k->id }}" {{ $k->id == $user->kelas_id ? 'selected' : '' }}>
                            {{ $k->nama_kelas }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit"
                    style="background:#4CAF50; color:white; padding:10px 20px; border:none; border-radius:5px; cursor:pointer;">
                Simpan Perubahan
            </button>

            <a href="{{ route('user.index') }}"
               style="background:#777; color:white; padding:10px 20px; border-radius:5px; text-decoration:none; margin-left:10px;">
               Kembali
            </a>
        </form>
    </div>
@endsection
