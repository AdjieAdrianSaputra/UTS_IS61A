@extends('layouts.master')
@section('title','Dashboard')
@section('heading','Halaman Dashboard')

@section('content')
        <div class="card-body">
        Halo {{ Auth::user()->name }}, <br> Dashboard Coming Soon! Harap Sabarr
        </div>
        <!-- /.card-body -->

@endsection
