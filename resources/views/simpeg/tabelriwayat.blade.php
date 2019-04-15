@extends('layouts.tabel')
@section('content')
<div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Riwayat Pendidikan</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Static Table Start -->
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Data <span class="table-project-n"></span> Riwayat Pendidikan</h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                        <select class="form-control dt-tb">
											<option value="">Export Basic</option>
											<option value="all">Export All</option>
											<option value="selected">Export Selected</option>
										</select>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th data-field="state" data-checkbox="true"></th>
                                                <th data-field="id">ID</th>
                                                <th data-field="pegawai_id" data-editable="true">ID pegawai</th>
                                                <th data-field="jenjang" data-editable="true">Jenjang</th>
                                                <th data-field="jurusan" data-editable="true">Jurusan</th>
                                                <th data-field="nama_sekolah" data-editable="true">Nama Sekolah</th>
                                                <th data-field="tahun_masuk">Tahun Masuk</th>
                                                <th data-field="tahun_lulus" data-editable="true">Tahun Lulus</th>
                                                <th data-field="action">Action</th>
                                            </tr>
                                        </thead>
                                            @foreach($riwayat_pendidikan as $rp)
                                            <tr>
                                                <td></td>
                                                <td>{{ $rp->id }}</td>
                                                <td>{{ $rp->pegawai_id }}</td>
			                                    <td>{{ $rp->jenjang }}</td>
			                                    <td>{{ $rp->jurusan }}</td>
			                                    <td>{{ $rp->nama_sekolah }}</td>
			                                    <td>{{ $rp->tahun_masuk }}</td>
                                                <td>{{ $rp->tahun_lulus }}</td>
			                                    <td>
				                                <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><a href="{{url('addpegawai')}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></a></i></button>
                                                <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><a href="{{url('')}}"><i class="fa fa-trash-o" aria-hidden="true"></a></i></button>
			                                    </td>
		                                    </tr>
		                                    @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Static Table End -->
@endsection