@extends('layout.master', ['title' => $title])
@section('content')
    <!-- Basic Layout -->
    <div class="col-xx">
        <div class="card mb-4">
          <div class="card-body">
            <div class="card-datatable table-responsive pt-0">
                <table id="table-pengajuan" class="table">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Tanggal Pengajuan</th>
                      <th>Nama Pemohon</th>
                      <th>Nama Terdakwa</th>
                      <th>No Hp/Wa</th>
                      <th>Alamat Lengkap</th>
                      <th>Jenis</th>
                      <th>Catatan</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                </table>
              </div>
          </div>
        </div>
      </div>
@endsection
