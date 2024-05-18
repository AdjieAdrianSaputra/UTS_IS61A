@extends('layouts.master')
@section('title','Barang')
@section('heading','Penyewaan Alat Piknik BNA')

@section('content')
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Barang</th>
                                            <th>Nama Barang</th>
                                            <th>Tarif</th>                                            
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>KL</td>
                                            <td>Kursi Lipat</td>
                                            <td>15,000</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>ML</td>
                                            <td>Meja Lipat</td>
                                            <td>15,000</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>TD</td>                                                                                  
                                            <td>Tenda</td>
                                            <td>80,000</td>
                                        </tr>                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

@endsection