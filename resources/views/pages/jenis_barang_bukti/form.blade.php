@extends('layout.master',['title' => $title])
@section('content')
<div class="col-xx">
    <div class="card mb-4 rounded-1">
      <div class="card-body">
        <div class="row">
            <form action="{{ $action }}" method="POST">
                @method($method)
                @csrf
                <div class="col-md-9 mb-3">
                    <label class="form-label" for="barang_bukti">Jenis Barang Bukti</label>
                    <input type="text" id="barang_bukti" class="form-control" name="barang_bukti" value="{{ $jenisBarangBukti->barang_bukti ?? old('barang_bukti') }}"/>
                    @error('barang_bukti')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-9">
                    <button type="submit" class="btn btn-dark w-100">Simpan</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
@endsection
