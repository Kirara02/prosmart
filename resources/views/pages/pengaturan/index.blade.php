@extends('layout.master', ['title' => $title])
@section('content')
<div class="col-xx">
    <div class="card mb-4">
      <div class="card-body">
            <div class="d-flex bd-highlight mb-3">
                <div class="p-2 bd-highlight">
                    <a href="{{ route('pengaturan.create') }}" class="btn btn-primary shadow-none"><i class="fa fa-plus-circle text-white me-2"></i>Tambah Data</a>
                </div>
            </div>
            <div class="card-datatable table-responsive pt-0">
            <table id="table-pengaturan" class="table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Deskripsi</th>
                  <th>Lihat Gambar</th>
                  <th>Action</th>
                </tr>
              </thead>
              {{-- <tbody>
                @foreach ($items as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->judul }}</td>
                        <td>
                            <img src="{{ asset('storage/'.$item->image) }}" alt="" srcset="">
                        </td>
                        <td class="text-center">
                            <a href="{{ route('gallery.edit', $item->id) }}" class="btn btn-secondary border-0 text-dark">
                                <i class="fa fa-pen "></i>
                            </a>
                            <form id="form-delete" action="{{ route('gallery.destroy',$item->id) }}" method="post" class="d-inline">
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
