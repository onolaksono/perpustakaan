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
                        <li class="breadcrumb-item"><a href="javascript:void(0">Jenis Pustaka</a></li>
                        <li class="breadcrumb-item active">Tambah Jenis</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-12">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Tambah Jenis Pustaka</h4>
                            </div>
                            <div class="card-body m-t-15">
                                <form method="POST" action="{{ route('jenis_pustaka.store') }}" enctype="multipart/form-data" class="form-horizontal form-bordered">
                                {{ csrf_field() }}
                                    <div class="form-body">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">ID Jenis</label>
                                            <div class="col-md-2">
                                                <input type="text" class="form-control" name="id_jenis">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Nama</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="nama_jenis">    
                                            </div>
                                        </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="offset-sm-3 col-md-9">
                                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Simpan</button>
                                                        <button type="button" class="btn btn-inverse">Batal</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>                      
                    </div>
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->

@endsection