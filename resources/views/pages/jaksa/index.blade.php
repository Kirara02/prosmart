@extends('layout.master', ['title' => $title] )
@section('content')
    <!-- Basic Layout -->
    <div class="col-xx">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
                <div class="card-datatable table-responsive text-nowrap">
                <div class="d-flex justify-content-end mb-3">
                    <a href="{{ route('jaksa.create') }}" class="btn btn-primary shadow-none"><i class="fa fa-plus-circle text-white me-2"></i>Tambah Data</a>
                </div>
                <table id="table-jaksa" class="table">
                  <thead>
                    <tr>
                      <th width="54px">No</th>
                      <th>Nama Jaksa</th>
                      <th width="40px">Action</th>
                    </tr>
                  </thead>
                  {{-- <tbody>
                    @foreach ($items as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama_jaksa }}</td>
                            <td class="text-center">
                                <a href="{{ route('jaksa.edit', $item->id) }}" class="btn btn-secondary border-0 text-dark">
                                    <i class="fa fa-pen "></i>
                                </a>
                                <form id="form-delete" action="{{ route('jaksa.destroy',$item->id) }}" method="post" class="d-inline">
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
      </div>
@endsection
