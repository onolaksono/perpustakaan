@extends('layouts.app2')

@section('content')
    
        <!-- Page wrapper  -->
        <div class="page-wrapper" style="height:1200px;">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Data Buku</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Data Buku</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <!-- <h4 class="card-title">Data Buku</h4>
                                <h6 class="card-subtitle">List Buku</h6> -->
                                <a href="{{ url('data_buku/tambah') }}"><button type="button" class="btn btn-primary m-b-10 m-l-5"><i class="fa fa-plus-circle"></i> Tambah Buku</button></a>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Judul, Pengarang, Penerbit</th>
                                                <th>Tahun Terbit</th>
                                                <th>Jumlah Halaman</th>
                                                <th>Lokasi Penyimpanan</th>
                                                <th>Deskripsi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="text-align:center;">1</td>
                                                <td>System Architect<br>
                                                    <b>Dwi Laksono</b><br>
                                                    <i>Ono Legend</i>
                                                </td>
                                                <td style="text-align:center;">2018</td>
                                                <td style="text-align:center;">618</td>
                                                <td style="text-align:center;">Rak 1</td>
                                                <td>Tentang kehidupan</td>
                                                <td style="text-align:center;"><a href="#" title="Edit Data"><i class="fa fa-pencil"></i></a> | <a href="#" title="Hapus Data"><i class="fa fa-trash"></i></a></td>
                                            </tr>                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->

@endsection