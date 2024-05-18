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
                                            <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></td>
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