@extends('layout.master', ['title' => $title] )
@section('content')
<div class="col-xx">
    <div class="card mb-4 bg-light rounded-1">
      <div class="card-body">
        <div class="row">
            <form action="{{ $action }}" method="POST" enctype="multipart/form-data">
                @method($method)
                @csrf
                <div class="col-md-9 mb-3">
                    <label class="form-label" for="deskripsi">Deskripsi</label>
                    <input type="text" id="deskripsi" class="form-control" name="deskripsi" value="{{ $pengaturan->deskripsi ?? old('deskripsi') }}"/>
                    @error('deskripsi')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-9 mb-3">
                    <label class="form-label" for="image">Upload Image Banner</label>
                    <input type="file" id="image" class="form-control" name="image" value="{{ $pengaturan->image ?? old('image') }}"/>
                    @error('image')
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
