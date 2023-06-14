@extends('layout.master', ['title' => $title])
@section('content')
    <!-- Basic Layout -->
    <div class="col-xx">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row ">
                <form action="{{ $action }}" method="POST" enctype="multipart/form-data">
                    @method($method)
                    @csrf
                    <div class="accordion-body">
                        <div class="row g-3">
                          <div class="col-md-4">
                            <label class="form-label" for="nama_pemohon">Nama Pemohon</label>
                            <input
                            value="{{ $pengajuan->nama_pemohon ?? old('nama_pemohon') }}"
                            name="nama_pemohon"
                              type="text"
                              id="nama_pemohon"
                              class="form-control"
                            />
                            @error('nama_pemohon')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                          </div>
                          <div class="col-md-4">
                            <label class="form-label" for="nama_terdakwa">Nama Terdakwa</label>
                            <input
                            value="{{ $pengajuan->jenis ?? old('jenis') }}"
                                name="nama_terdakwa"
                              type="text"
                              id="nama_terdakwa"
                              class="form-control"
                            />
                            @error('nama_terdakwa')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                          </div>
                          <div class="col-md-4">
                            <label class="form-label" for="no_tgl">No Hp/Wa</label>
                            <input
                            value="{{ $pengajuan->no_handphone ?? old('no_handphone') }}" name="no_handphone" type="text" id="no_tgl" class="form-control"/>
                            @error('no_handphone')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                          </div>
                          <div class="col-md-4">
                            <label class="form-label" for="no_tgl">Alamat Lengkap</label>
                            <input
                            value="{{ $pengajuan->alamat ?? old('alamat') }}" name="alamat" type="text" id="no_tgl" class="form-control"/>
                            @error('alamat')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                          </div>
                          <div class="col-md-4">
                            <label class="form-label" for="no_tgl">Bukti Kepemilikan</label>
                            <input
                            value="{{ $pengajuan->kepemilikan ?? old('kepemilikan') }}" name="kepemilikan[]" type="file" multiple id="no_tgl" class="form-control"/>
                            @error('kepemilikan')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                          </div>
                          <div class="col-md-4">
                            <label class="form-label" for="no_tgl">Bukti catatan</label>
                            <input
                            value="{{ $pengajuan->ktp ?? old('ktp') }}" name="ktp" type="file" id="no_tgl" class="form-control"/>
                            @error('ktp')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                          </div>
                          <div class="col-md-4">
                            <label class="form-label" for="no_tgl">Catatan</label>
                            <input
                            value="{{ $pengajuan->catatan ?? old('catatan') }}" name="catatan" type="text" id="no_tgl" class="form-control"/>
                            @error('catatan')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                          </div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-3 ">
                          <button type="submit" class="btn btn-dark w-100">Simpan</button>
                    </div>
                    </div>
                    </div>
                </form>
            </div>
          </div>
        </div>
    </div>
@endsection
