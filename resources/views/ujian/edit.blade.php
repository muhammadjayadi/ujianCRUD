@extends('layout/main')

@section('title', 'Form ubah Data')



@section('container')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="mt-3">Form Ubah Data</h1>

                <form method="POST" action="/ujian/{{ $ujian->id }}">
                    @method('Patch')
                    @csrf
                    <div class="form-group">
                        <label for="nama_mk">Mata Kuliah</label>
                        <input type="text" class="form-control @error('nama_mk') is-invalid
                        @enderror" id="nama_mk" placeholder="masukan nama mata kuliah" name="nama_mk"
                            value="{{ $ujian->nama_mk }}">

                        @error('nama_mk')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="dosen">Dosen</label>
                        <input type="text" class="form-control @error('dosen') is-invalid
                        @enderror" id="dosen" placeholder="masukan nama dosen" name="dosen" value="{{ $ujian->dosen }}">
                        @error('dosen')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jumlah_soal">Jumlah Soal</label>
                        <input type="number" class="form-control @error('jumlah_soal') is-invalid
                            @enderror" id="jumlah_soal" placeholder="masukan jumlah_soal" name="jumlah_soal"
                            value="{{ $ujian->jumlah_soal }}">
                        @error('jumlah_soal')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" class="form-control @error('keterangan') is-invalid
                            @enderror" id="keterangan" placeholder="masukan keterangan" name="keterangan"
                            value="{{ $ujian->keterangan }}">
                        @error('keterangan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary"> Ubah Data!</button>
                    <a href="/ujian" class="btn btn-primary inline">kembali</a>
                </form>


            </div>

        </div>
    </div>
    </div>
@endsection
