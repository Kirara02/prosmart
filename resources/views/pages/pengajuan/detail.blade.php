@extends('layout.master', ['title' => $title])
@section('content')
    <!-- Basic Layout -->
    <div class="col-xx">
        <div class="card mb-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-6 order-1 order-xl-0">
                      <div class="mb-2 d-flex">
                        <p class="mb-1">No Permohonan :</p>
                        <b><p class="ms-5">{{ $data['id'] }}</p></b>
                      </div>
                      <div class="mb-2 pt-1 d-flex">
                        <p class="mb-1">Nama Pemohon :</p>
                        <b><p class="ms-5">{{ $data->nama_pemohon }}</p></b>
                     </div>
                      <div class="mb-3 pt-1 d-flex">
                        <p class="mb-1 ">Nama Terdakwa (*jika mengetahui) :</p>
                        <b><p class="ms-5">{{ $data->nama_terdakwa ?? '' }}</p></b>
                      </div>
                    </div>
                    <div class="col-xl-6 order-0 order-xl-0">
                        <div class="mb-3 pt-1 d-flex">
                            <p class="mb-1 ">No Hp/Wa :</p>
                            <b><p class="ms-5">{{ $data->no_handphone ?? '' }}</p></b>
                        </div>
                        <div class="mb-3 pt-1 d-flex">
                            <p class="mb-1 ">Alamat Lengkap :</p>
                            <b><p class="ms-5">{{ $data->alamat ?? '' }}</p></b>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-xl-6 order-1 order-xl-0">
                        <div class="mb-2">
                            <p class="mb-1">Bukti Kepemilikan :</p>
                            @foreach ($data->gallery as $item)
                                <img src="{{ asset('storage/'.$item->image) }}" class="mb-1" alt="" width="200px" height="100px">
                            @endforeach
                        </div>
                    </div>
                    <div class="col-xl-6 order-0 order-xl-0">
                        <div class="mb-2">
                            <p class="mb-1">Bukti KTP:</p>

                            <img src="{{ asset('storage/'.$data->ktp) }}" alt="" width="400px" height="200px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
