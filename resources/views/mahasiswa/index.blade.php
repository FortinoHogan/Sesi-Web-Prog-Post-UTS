@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-12">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <h1 style="text-align: center">{{ __('test.judul') }}</h1>
            <h1 style="text-align: center">@lang('test.judul')</h1>

            <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary">Tambah</a>
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Aksi</th>
                </tr>
                @foreach ($mahasiswas as $mhs)
                    <tr>
                        <td>{{ $mhs->id }}</td>
                        <td>{{ $mhs->nim }}</td >
                        <td>{{ $mhs->nama }}</td>
                        <td>{{ $mhs->jurusan->nama_jurusan }}</td>
                        <td>
                            <a href="{{ route('mahasiswa.edit', $mhs->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
