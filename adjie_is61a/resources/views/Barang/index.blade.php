@extends('layouts.master')
@section('title','Barang')
@section('heading','Penyewaan Alat Piknik BNA')

@section('content')
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">
                                <a href="#" class="btn btn-primary"><i class="fa fa-folder-plus"></i> Tambah Barang</a>
                            </h3>
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
                                        <tr>
                                            <td>1</td>
                                            <td>Kursi Lipat</td>
                                            <td>15,000</td>
                                            <td>
                                                <a href="#" class="btn btn-info btn-sm"><i class="fa fa-pencil-alt"></i></a>
                                                <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Meja Lipat</td>
                                            <td>15,000</td>
                                            <td>
                                                <a href="#" class="btn btn-info btn-sm"><i class="fa fa-pencil-alt"></i></a>
                                                <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>                                                                               
                                            <td>Tenda</td>
                                            <td>80,000</td>
                                            <td>
                                                <a href="#" class="btn btn-info btn-sm"><i class="fa fa-pencil-alt"></i></a>
                                                <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

@endsection