@extends('layout.master', ['title' => $title])
@section('content')
<div class="col-xx">
    <div class="card mb-4">
      <div class="card-body">
        <div class="d-flex bd-highlight mb-3">
            <div class="p-2 bd-highlight">
                <a href="{{ route('gallery.create') }}" class="btn btn-primary shadow-none"><i class="fa fa-plus-circle text-white me-2"></i>Tambah Data</a>
            </div>
        </div>
        <div class="card-datatable table-responsive pt-0">
            <table id="table-gallery" class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Lihat Gambar</th>
                        <th>Tanggal Dibuat</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>
      </div>
    </div>
  </div>
@endsection
