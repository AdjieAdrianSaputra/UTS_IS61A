@extends('layouts.master')
@section('title','Barang')
@section('heading','Penyewaan Alat Piknik BNA')

@section('content')
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
                        </div>
                    </div>  
                    <div class="card-header">
                    <h3 class="text-left">                           
                        <a href="/barang/form/" class="btn btn-primary"><i class="fa fa-folder-plus"></i> Tambah Data</a>
                    </h3>
                    </div>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Barang</th>
                                            <th>Tarif</th>   
                                            <th>Aksi</th>                                       
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($brg as $item)
                                        <tr>
                                            <td>{{$nomor++}}</td>
                                            <td>{{$item->nama_barang}}</td>
                                            <td>{{$item->tarif}}</td>
                                            <td><a href="/barang/edit/{{$item->id}}" class="btn btn-info btn-sm"><i class="fa fa-pencil-alt"></i></a>
                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus{{$item->id}}">
                                <i class="fa fa-trash"></i>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="hapus{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Peringatan!</h1>
                                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Yakin {{$item->nama_barang}} di Hapus?
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <form action="/barang/{{$item->id}}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                    </div>
                                </div>
                                </div>
                            </div>
                                        </tr>
                                    </tr>                                        
                                    @empty

                                    @endforelse                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

@endsection