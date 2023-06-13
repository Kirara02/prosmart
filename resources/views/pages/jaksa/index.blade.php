@extends('layout.master', ['title' => 'Dashboard'] )
@section('content')
    <!-- Basic Layout -->
    <div class="col-xx">
        <div class="card mb-4 bg-light rounded-1">
          <div class="card-body">
            <div class="card-datatable text-nowrap text-black">
                <div class="d-flex justify-content-end mb-3 ">
                    <input type="text" class="form-control border border-dark rounded-0 text-black w-25 text-center" placeholder="Search Nama Jaksa">
                    <a href="{{ route('jaksa.create') }}" class="btn btn-white border border-dark rounded-0 text-black shadow-none"><i class="fa fa-plus-circle text-black me-2"></i>Tambah Data</a>
                </div>
                <table class="datatables-ajax table table-borderless border-0">
                  <thead class="my bg-label-light text-black">
                    <tr>
                      <th width="54px">No</th>
                      <th>Nama Jaksa</th>
                      <th width="40px">Action</th>
                    </tr>
                    <tr class="bg-light">
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                  </thead>
                  <tbody class="bg-label-light text-black">
                    @foreach ($jaksa as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama_jaksa }}</td>
                            <td class="text-center">
                                <a href="{{ route('jaksa.edit', $item->id) }}" class="border-0 text-black">
                                    <i class="fa fa-pen "></i>
                                </a>
                                <form id="form-delete" action="{{ route('jaksa.destroy',$item->id) }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button type="button" class="btn border-0"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
          </div>
        </div>
      </div>
@endsection
