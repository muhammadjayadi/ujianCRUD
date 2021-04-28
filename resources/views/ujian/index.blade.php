@extends('layout/main')

@section('title', 'daftar matakuliah')



@section('container')
    <div class="container p-5">
        <h2>Tabel mata Kuliah</h2>
        <a href="/ujian/create" class="btn btn-primary my-3">Tambah Data </a>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Mata Kuliah</th>
                    <th scope="col">Dosen</th>
                    <th scope="col">Jumlah Soal</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ujians as $ujian)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $ujian->nama_mk }}</td>
                        <td>{{ $ujian->dosen }}</td>
                        <td>{{ $ujian->jumlah_soal }}</td>
                        <td>{{ $ujian->keterangan }}</td>
                        <td>
                            <a href="/ujian/{{ $ujian->id }}/edit" class="btn btn-primary">Edit</a>
                            <form action="/ujian/{{ $ujian->id }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

        </table>
    </div>
    </tbody>

@endsection
