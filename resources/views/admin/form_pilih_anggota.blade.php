@extends('layouts.app2')

@section('content')
    
        <!-- Page wrapper  -->
        <div class="page-wrapper" style="height:1200px;">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Data Transaksi</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Transaksi</li>
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
                                <div class="col-lg-12">
                                    <h3 class="box-title m-t-15">Pilih Anggota</h3>
                                    <hr class="m-t-0 m-b-40">  
                                    <div class="card-body m-t-15">
                                        <form action="#" class="form-horizontal form-bordered">
                                            <div class="form-body">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Nama Anggota</label>
                                                    <div class="col-md-9">
                                                        <select class="form-control">
                                                            <option value="Category 1">Anggota 1</option>
                                                            <option value="Category 2">Anggota 2</option>
                                                            <option value="Category 3">Anggota 5</option>
                                                            <option value="Category 4">Anggota 4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Jumlah Buku</label>
                                                    <div class="col-md-3">
                                                        <input type="text" placeholder="Jumlah Buku" class="form-control">
                                                        <small class="form-control-feedback"> *) Maksimal 14 </small> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="offset-sm-3 col-md-9">
                                                                <a href="{{ url('data_transaksi/pilih_anggota/form_transaksi') }}"><button type="button" class="btn btn-success"> <i class="fa fa-check"></i> Lanjutkan</button></a>
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
                    </div>
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->

@endsection