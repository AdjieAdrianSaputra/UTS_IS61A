@extends('layouts.master')
@section('title','Edit Barang')
@section('heading','Edit Barang')

@section('content')
    <div class="card">
    <div class="card-body">
            <form method="POST" action="/barang/{{$brg->id}}">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                    <input type="text" name="nama_barang" value="{{$brg->nama_barang}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tarif</label>
                    <input type="text" name="tarif" value="{{$brg->tarif}}" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
        </div>
@endsection