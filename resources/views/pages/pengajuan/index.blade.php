@extends('layout.master', ['title' => $title])
@section('content')
    <!-- Basic Layout -->
    <div class="col-xx">
        <div class="card mb-4">
          <div class="card-body">
            <div class="d-flex justify-content-end mb-3 ">
                <a href="{{ route('pengajuan.create') }}" class="btn btn-primary shadow-none"><i class="fa fa-plus-circle text-white me-2"></i>Tambah Data</a>
            </div>
            <div class="card-datatable table-responsive text-nowrap mt-2">
                <table id="table-pengajuan" class="datatables-ajax table">
                  <thead>
                    <tr>
                      <th width="30px">No</th>
                      <th>Tanggal Pengajuan</th>
                      <th>Nama Pemohon</th>
                      <th>Nama Terdakwa</th>
                      <th>No Hp/Wa</th>
                      <th>Alamat Lengkap</th>
                      <th>Catatan</th>
                      <th width="40px">Action</th>
                    </tr>
                  </thead>
                  {{-- <tbody>
                    @foreach ($items as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->tgl }}</td>
                            <td>{{ $item->nama_terpidana }}</td>
                            <td>{{ $item->jaksa->nama_jaksa }}</td>
                            <td>{{ $item->jenis }}</td>
                            <td>{{ $item->no_tgl_putusan }}</td>
                            <td>{{ $item->status }}</td>
                            <td class="text-center">
                                <a href="{{ route('barang-bukti.edit', $item->id) }}" class="btn btn-secondary border-0 text-dark">
                                    <i class="fa fa-pen "></i>
                                </a>
                                <form id="form-delete" action="{{ route('barang-bukti.destroy',$item->id) }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger border-0"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                  </tbody> --}}
                </table>
              </div>
          </div>
        </div>
      </div>
@endsection
