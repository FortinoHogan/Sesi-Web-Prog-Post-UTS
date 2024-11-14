@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-12">
            <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
                @csrf
                @method('PUT')
                <label for="">NIM</label>
                <input type="text" name="nim" required value="{{ $mahasiswa->nim }}">

                <label for="">Nama</label>
                <input type="text" name="nama" required value="{{ $mahasiswa->nama }}">

                <label for="">Jurusan</label>
                <select name="jurusan_id" id="">
                    @foreach ($jurusans as $jurusan)
                        <option value="{{ $jurusan->id }}" {{ $mahasiswa->jurusan_id == $jurusan->id ? 'selected' : '' }}>
                            {{ $jurusan->nama_jurusan }}
                        </option>
                    @endforeach
                </select>

                <button class="btn btn-primary" type="submit">Simpan</button>
            </form>
        </div>
    </div>
@endSection
