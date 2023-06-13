@extends('layout.master', ['title' => $title] )
@section('content')
<div class="col-xx">
    <div class="card mb-4 bg-light rounded-1">
      <div class="card-body">
        <div class="row">
            <form action="{{ $action }}" method="POST">
                @method($method)
                @csrf
                <div class="col-md-9 mb-3">
                    <label class="form-label" for="nama_jaksa">Nama Jaksa</label>
                    <input type="text" id="nama_jaksa" class="form-control" name="nama_jaksa" value="{{ $jaksa->nama_jaksa ?? old('nama_jaksa') }}"/>
                    @error('nama_jaksa')
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
