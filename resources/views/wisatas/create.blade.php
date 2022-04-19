@extends('adminlte::page')

@section('title', 'Tambah User')

@section('content_header')
    <h1 class="m-0 text-dark">Tambah Wisata</h1>
@stop

@section('content')
    <form action="{{route('wisatas.store')}}" method="post">
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                <div class="form-group">
                        <label for="exampleInputImage">Gambar</label>
                        <input type="text" class="form-control @error('image') is-invalid @enderror" id="exampleInputImage" placeholder="Link Gambar" name="image" value="{{old('image')}}">
                        @error('image') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputTitle">Nama</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="exampleInputTitle" placeholder="Nama Tempat Wisata" name="title" value="{{old('title')}}">
                        @error('title') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputLocate">Lokasi</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="exampleInputLocate" placeholder="Masukkan Lokasi" name="locate" value="{{old('locate')}}">
                        @error('locate') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDesc">Deskripsi</label>
                        <input type="text" class="form-control @error('description') is-invalid @enderror" id="exampleInputDescription" placeholder="Deskripsi" name="description">
                        @error('description') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputType">Tipe</label>
                        <input type="text" class="form-control" id="exampleInputType" placeholder="Tipe Wisata" name="type">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputLocation">Alamat</label>
                        <input type="text" class="form-control" id="exampleInputLocation" placeholder="Alamat Lengkap" name="location">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDuration">Jam Operasional</label>
                        <input type="text" class="form-control" id="exampleInputDuration" placeholder="Waktu" name="duration">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPrice">Harga Tiket</label>
                        <input type="integer" class="form-control" id="exampleInputPrice" placeholder="Harga tiket" name="price">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputMaps">Maps</label>
                        <input type="text" class="form-control" id="exampleInputMaps" placeholder="Lokasi di Google Maps" name="maps">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputRate">Rating</label>
                        <input type="number" step="0.1" class="form-control" id="exampleInputRate" placeholder="Rating" name="rate">
                    </div>

                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{route('wisatas.index')}}" class="btn btn-default">
                        Batal
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop