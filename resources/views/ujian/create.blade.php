@extends('layout/main')

@section('title', 'Form Tambah Data ')



@section('container')
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <h1 class="mt-3">Form Tambah Data Mahasiswa</h1>

                    <form method="POST" action="/ujian">
                        @csrf
                        <div class="form-group">
                        <label for="nama_mk">Mata Kuliah</label>
                        <input type="text" class="form-control @error('nama_mk') is-invalid
                        @enderror" id="nama_mk" placeholder="masukan nama mata kuliah" name="nama_mk" value="{{ old('nama_mk') }}">

                        @error('nama_mk')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        </div>

                        <div class="form-group">
                            <label for="dosen">Dosen</label>
                            <input type="text" class="form-control @error('dosen') is-invalid
                        @enderror" id="dosen" placeholder="masukan nama dosen" name="dosen" value="{{ old('dosen') }}">
                            @error('dosen')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="jumlah_soal">Jumlah Soal</label>
                            <input type="number" class="form-control @error('jumlah_soal') is-invalid
                            @enderror" id="jumlah_soal" placeholder="masukan jumlah_soal" name="jumlah_soal" value="{{ old('jumlah_soal') }}">
                            @error('jumlah_soal')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" class="form-control @error('keterangan') is-invalid
                            @enderror" id="keterangan" placeholder="masukan keterangan" name="keterangan" value="{{ old('keterangan') }}">
                            @error('keterangan')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            </div>

                            <button type="submit" class="btn btn-primary"> Tambah Data!</button>
                    </form>

                </div>

            </div>
        </div>
        </div>


        @endsection
