@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-12">
            <form action="{{ route('mahasiswa.store') }}" method="POST">
                @csrf

                <label for="">NIM</label>
                <input type="text" name="nim" required>

                <label for="">Nama</label>
                <input type="text" name="nama" required>

                <label for="">Jurusan</label>
                <select name="jurusan_id" id="">
                    @foreach ($jurusans as $jurusan)
                        <option value="{{ $jurusan->id }}">{{ $jurusan->nama_jurusan }}</option>
                    @endforeach
                </select>

                <button class="btn btn-primary" type="submit">Simpan</button>
            </form>
        </div>
    </div>
@endsection
