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
                                            <li><span class="bread-blod">Data Keluarga</span>
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
                                    <h1>Data <span class="table-project-n"></span> Keluarga</h1>
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
                                                <th data-field="pegawai_id">ID PEGAWAI</th>
                                                <th data-field="status_nikah">STATUS NIKAH</th>
                                                <th data-field="nama_pasangan">NAMA PASANGAN</th>
                                                <th data-field="ttl_pasangan">TTL</th>
                                                <th data-field="jml_anak">JUMLAH ANAK</th>
                                                <th data-field="action">ACTION</th>
                                            </tr>
                                        </thead>
                                            @foreach($keluarga as $data)
                                            <tr>
                                                <td></td>
                                                <td>{{ $data->id }}</td>
                                                <td>{{ $data->pegawai_id }}</td>
			                                    <td>{{ $data->status_nikah }}</td>
			                                    <td>{{ $data->nama_pasangan }}</td>
			                                    <td>{{ $data->ttl_pasangan }}</td>
			                                    <td>{{ $data->jml_anak }}</td>
			                                    <td>
                                                <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><a href="/editkeluarga/{{ $data->id }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></a></i></button>
                                                <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><a href="/deletekeluarga/{{ $data->id }}"><i class="fa fa-trash-o" aria-hidden="true"></a></i></button>
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