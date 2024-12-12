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
                    <th>@lang('crud.label_id')</th>
                    <th>@lang('crud.label_nama')</th>
                    <th>@lang('crud.label_nim')</th>
                    <th>@lang('crud.label_jurusan')</th>
                    <th>@lang('crud.label_aksi')</th>
                </tr>
                @foreach ($mahasiswas as $mhs)
                    <tr>
                        <td>{{ $mhs->id }}</td>
                        <td>{{ $mhs->nim }}</td >
                        <td>{{ $mhs->nama }}</td>
                        <td>{{ $mhs->jurusan->nama_jurusan }}</td>
                        <td class="d-flex">
                            <a href="{{ route('mahasiswa.show', $mhs->id) }}" class="btn btn-success">@lang('crud.btn_tampil')</a>
                            <a href="{{ route('mahasiswa.edit', $mhs->id) }}" class="btn btn-warning">@lang('crud.btn_ubah')</a>
                            <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">@lang('crud.btn_hapus')</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
