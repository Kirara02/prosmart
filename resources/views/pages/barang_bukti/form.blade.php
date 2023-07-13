@extends('layout.master', ['title' => $title])
@section('content')
    <!-- Basic Layout -->
    <div class="col-xx">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row ">
                <form action="{{ $action }}" method="POST">
                    @method($method)
                    @csrf
                    <div class="accordion-body">
                        <div class="row g-3">
                          <div class="col-md-4">
                            <label class="form-label" for="no_reg">No.Reg Barang Bukti</label>
                            <input
                            value="{{ $barangBukti->no_reg ?? old('no_reg') }}"
                                name="no_reg"
                                type="text"
                                id="no_reg"
                                class="form-control"
                            />
                            @error('no_reg')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                          </div>
                          <div class="col-md-4">
                            <label class="form-label" for="nama_terpidana">Nama Terpidana</label>
                            <input
                            value="{{ $barangBukti->nama_terpidana ?? old('nama_terpidana') }}"
                            name="nama_terpidana"
                              type="text"
                              id="nama_terpidana"
                              class="form-control"
                              data-role="tagsinput"
                            />
                            @error('nama_terpidana')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                          </div>
                          <div class="col-md-4">
                            <label class="form-label" for="jaksa">Pilih Jaksa</label>
                            <select name="id_jaksa" id="jaksa" class="select form-select" data-allow-clear="true">
                                @foreach ($jaksa as $item)
                                    <option value="{{ $item->id }}" {{ $barangBukti->id_jaksa == $item->id ? 'selected' : ''}} >{{ $item->nama_jaksa }}</option>
                                @endforeach
                            </select>
                            @error('id_jaksa')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                          </div>
                          <div class="col-md-4">
                            <label class="form-label" for="id_jenis_barang_bukti">Jenis Barang Bukti</label>
                            <select name="id_jenis_barang_bukti" id="id_jenis_barang_bukti" class="form-select">
                                @foreach ($jenis as $item)
                                    <option value="{{ $item->id }}">{{ $item->barang_bukti }}</option>
                                @endforeach
                            </select>
                            @error('id_jenis_barang_bukti')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                          </div>
                          <div class="col-md-4">
                            <label class="form-label" for="no_tgl">No dan Tanggal Putusan</label>
                            <input
                            value="{{ $barangBukti->no_tgl_putusan ?? old('no_tgl_putusan') }}" name="no_tgl_putusan" type="text" id="no_tgl" class="form-control"/>
                            @error('no_tgl_putusan')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                          </div>
                          <div class="col-md-4">
                            <label class="form-label" for="no_tgl">Status Barang</label>
                            <select  name="status_barang" id="status_barang" class="form-select">
                                <option value="1">Belum Diambil</option>
                                <option value="2">Sudah Diambil</option>
                              </select>
                            @error('status_barang')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                          </div>
                          <div>
                          <label class="form-check-label">Status</label>
                          <div class="col mt-2">
                            <div class="form-check form-check-inline">
                              <input
                                name="status"
                                class="form-check-input"
                                type="radio"
                                value="publish"
                                id="jenis"
                                {{ $barangBukti->status == 'publish' ? 'checked' : '' }}
                              />
                              <label class="form-check-label" for="jenis"
                                >Publish</label
                              >
                            </div>
                            <div class="form-check form-check-inline">
                              <input
                                name="status"
                                class="form-check-input"
                                type="radio"
                                value="draft"
                                id="-type-office"
                                {{ $barangBukti->status == 'draft' ? 'checked' : '' }}
                              />
                              <label class="form-check-label" for="-type-office">
                                Draft
                              </label>
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
