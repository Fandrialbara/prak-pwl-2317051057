@extends('layouts.app')

@section('content')
    <h1 style="text-align:center; color:#444;">Daftar Pengguna</h1>
     <button type="submit"
                    style="background:#4CAF50; color:white; padding:10px 20px; border:none; border-radius:5px; cursor:pointer;">
                 + Tambah Pengguna
            </button>

        </a>

        <table style="width:100%; border-collapse: collapse;">
            <thead>
                <tr style="background:#f4f4f4; text-align:left;">
                    <th style="padding:10px; border-bottom:2px solid #ddd;">ID</th>
                    <th style="padding:10px; border-bottom:2px solid #ddd;">Nama</th>
                    <th style="padding:10px; border-bottom:2px solid #ddd;">NPM</th>
                    <th style="padding:10px; border-bottom:2px solid #ddd;">Kelas</th>
                </tr>
            </thead>
            <tbody>
                @forelse($users as $user)
                <tr>
                    <td style="padding:10px; border-bottom:1px solid #eee;">{{ $user->id }}</td>
                    <td style="padding:10px; border-bottom:1px solid #eee;">{{ $user->nama }}</td>
                    <td style="padding:10px; border-bottom:1px solid #eee;">{{ $user->nim }}</td>
                    <td style="padding:10px; border-bottom:1px solid #eee;">{{ $user->nama_kelas }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" style="text-align:center; padding:20px; color:#888;">Belum ada data pengguna</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection