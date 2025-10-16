@extends('layouts.app')

@section('content')
    <h1 style="text-align:center; color:#444;">Daftar Pengguna</h1>

    <div style="max-width: 900px; margin: 20px auto; background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
        @if (session('success'))
            <div style="background:#D4EDDA; color:#155724; padding:10px; border-radius:5px; margin-bottom:15px;">
                {{ session('success') }}
            </div>
        @endif

        <table style="width:100%; border-collapse:collapse; text-align:left;">
            <thead style="background:#f0f0f0;">
                <tr>
                    <th style="padding:10px;">ID</th>
                    <th style="padding:10px;">Nama</th>
                    <th style="padding:10px;">NPM</th>
                    <th style="padding:10px;">Kelas</th>
                    <th style="padding:10px;">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($user as $u)
                    <tr>
                        <td style="padding:10px; border-bottom:1px solid #ddd;">{{ $u->id }}</td>
                        <td style="padding:10px; border-bottom:1px solid #ddd;">{{ $u->nama }}</td>
                        <td style="padding:10px; border-bottom:1px solid #ddd;">{{ $u->npm }}</td>
                        <td style="padding:10px; border-bottom:1px solid #ddd;">{{ $u->nama_kelas }}</td>
                        <td style="padding:10px; border-bottom:1px solid #ddd;">
                            <a href="{{ route('user.edit', $u->id) }}"
                               style="background:#2196F3; color:white; padding:5px 10px; border-radius:4px; text-decoration:none; margin-right:5px;">
                                Edit
                            </a>

                            <form action="{{ route('user.destroy', $u->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    onclick="return confirm('Yakin ingin menghapus data ini?')"
                                    style="background:#f44336; color:white; padding:5px 10px; border:none; border-radius:4px; cursor:pointer;">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" style="text-align:center; padding:15px;">Belum ada data pengguna.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
