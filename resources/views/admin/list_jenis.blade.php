@extends('layouts.app2')

@section('content')
    
        <!-- Page wrapper  -->
        <div class="page-wrapper" style="height:1200px;">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Jenis Pustaka</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Jenis Pustaka</li>
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
                                <a href="{{ url('jenis_pustaka/create') }}"><button type="button" class="btn btn-primary m-b-10 m-l-5"><i class="fa fa-plus-circle"></i> Tambah Jenis</button></a>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table">
                                        <thead>
                                            <tr>
                                                <th style="text-align:center;">No</th>
                                                <th>ID Jenis</th>
                                                <th>Nama</th>
                                                <th style="text-align:center;">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no = 0;?>
                                        @forelse($data as $d)
                                        <?php $no++ ;?>
                                        <?php
                                            $kode=DB::table('jenis')->select('id_jenis')->where('id', $d->id)->value('id_jenis');
                                        ?>
                                            <tr>
                                                <td style="text-align:center;">{{ $no }}</td>
                                                <td>{{ $kode }}</td>
                                                <td>{{ $d->nama_jenis }}</td>
                                                <td style="text-align:center;">
                                                <form action="{{ route('jenis_pustaka.destroy', ['jenis_pustaka'=>$d->id]) }}" method="post">
                                                <a href="{{ route('jenis_pustaka.edit', ['jenis_pustaka'=>$d->id]) }}" title="Edit Data" class="btn btn-info btn-flat btn-addon m-b-10 m-l-5"><i class="fa fa-pencil"></i> Edit</a> 
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <button type="submit" class="btn btn-danger btn-flat btn-addon m-b-10 m-l-5"><i class="fa fa-trash"></i> Hapus</button></form></td>
                                            </tr>                                           
                                        </tbody>
                                        @empty
                                        <tbody>
                                            <tr>
                                                <td colspan="11" style="text-align:center;">Data Kosong</td>
                                            </tr>
                                        </tbody>
                                        @endforelse
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