@extends('adminlte::page')

@section('title', 'Edit Wisata')

@section('content_header')
    <h1 class="m-0 text-dark">Edit Wisata</h1>
@stop

@section('content')
    <form action="{{route('wisatas.update', $wisata)}}" method="post">
        @method('PUT')
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
            <div class="card-body">
                <div class="form-group">
                        <label for="exampleInputImage">Gambar</label>
                        <input type="text" class="form-control @error('image') is-invalid @enderror" id="exampleInputImage" placeholder="Link Gambar" name="image" value="{{$wisata->image ?? old('image')}}">
                        @error('image') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputTitle">Nama</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="exampleInputTitle" placeholder="Nama Tempat Wisata" name="title" value="{{$wisata->title ?? old('title')}}">
                        @error('title') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputLocate">Lokasi</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="exampleInputLocate" placeholder="Masukkan Lokasi" name="locate" value="{{$wisata->locate ?? old('locate')}}">
                        @error('locate') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDesc">Deskripsi</label>
                        <input type="text" class="form-control @error('description') is-invalid @enderror" id="exampleInputDescription" placeholder="Deskripsi" name="description" value="{{$wisata->description ?? old('description')}}">
                        @error('description') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputType">Tipe</label>
                        <input type="text" class="form-control" id="exampleInputType" placeholder="Tipe Wisata" name="type" value="{{$wisata->type ?? old('type')}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputLocation">Alamat</label>
                        <input type="text" class="form-control" id="exampleInputLocation" placeholder="Alamat Lengkap" name="location" value="{{$wisata->location ?? old('location')}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDuration">Jam Operasional</label>
                        <input type="text" class="form-control" id="exampleInputDuration" placeholder="Waktu" name="duration" value="{{$wisata->duration ?? old('duration')}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPrice">Harga Tiket</label>
                        <input type="integer" class="form-control" id="exampleInputPrice" placeholder="Harga tiket" name="price" value="{{$wisata->price ?? old('price')}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputMaps">Maps</label>
                        <input type="text" class="form-control" id="exampleInputMaps" placeholder="Lokasi di Google Maps" name="maps" value="{{$wisata->maps ?? old('maps')}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputRate">Rating</label>
                        <input type="number" step=0.1 class="form-control" id="exampleInputRate" placeholder="Rating Wisata" name="rate" value="{{$wisata->rate ?? old('rate')}}">
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